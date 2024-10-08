<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="images/favicon.png" rel="icon" /> --}}
    <link rel="icon" href="{{ asset('/frontend/images/icon.png') }}" type="image/gif" sizes="16x16">

    <title>Rentaly - Invoice</title>

    <!-- Web Fonts
    ======================= -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

    <!-- Stylesheet
    ======================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/invoice/vendor/bootstrap/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/invoice/css/stylesheet.css') }}"/>
  </head>


  <body>
    <!-- Container -->
    <div class="container-fluid invoice-container" id="tblstudents">
      <!-- Header -->
      <header>
        <div class="row align-items-center">
          <div class="col-sm-7 text-center text-sm-start mb-3 mb-sm-0">
            {{-- <img id="logo" src="images/logo.png" title="Koice" alt="Koice" /> --}}
            <img class="logo-2" src="{{ asset('/frontend/images/logo.png') }}" alt="">
          </div>
          <div class="col-sm-5 text-center text-sm-end">
            <h4 class="text-7 mb-0">Invoice</h4>
          </div>
        </div>
        <hr>
      </header>

      <!-- Main Content -->
      <main>
        <div class="row">
          <div class="col-sm-6"><strong>Date:</strong> {{ now() }}</div>
          <div class="col-sm-6 text-sm-end"> <strong>Invoice No:</strong> {{ $bookingInfo->id }}</div>
        </div>
        <hr>

        <div class="row">
          <div class="col-sm-6 text-sm-end order-sm-1"> <strong>Pay To:</strong>
            <address>
            Rentaly<br />
            08 W 36th St,<br />
            New York, NY 10001<br />
            contact@rentaly.com
            </address>
          </div>

          <div class="col-sm-6 order-sm-0"> <strong>Invoiced To:</strong>
            <address>
            {{ $userName }}<br />
            {{ $userEmail }}<br />
            15 Hodges Mews, High Wycombe<br />
            United Kingdom
            </address>
          </div>
        </div>

        <div class="card">
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table mb-0">
      		      <thead class="card-header">
                  <tr>
                    <td class="col-3"><strong>Service</strong></td>
        			      <td class="col-4"><strong>Description</strong></td>
                    <td class="col-2 text-center"><strong>Daily rate</strong></td>
        			      <td class="col-1 text-center"><strong>Start date</strong></td>
        			      <td class="col-1 text-center"><strong>End date</strong></td>
                    <td class="col-2 text-end"><strong>Amount</strong></td>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td class="col-3">Car Rental</td>
                    <td class="col-4 text-1">Model : {{ $carInfo->name }} | Brand : {{ $carInfo->brand }}</td>
                    <td class="col-2 text-center">${{ $carInfo->daily_rent_price }}</td>
      			        <td class="col-1 text-center">
                            {{
                                \Carbon\Carbon::createFromFormat('d/m/y',$bookingInfo->start_date)->format('F d, Y');
                            }}
                        </td>
      			        <td class="col-1 text-center">
                            {{
                                \Carbon\Carbon::createFromFormat('d/m/y',$bookingInfo->end_date)->format('F d, Y');
                            }}
                        </td>
      			        <td class="col-2 text-end">${{$bookingInfo->total_cost}}</td>
                  </tr>

                </tbody>

                <tfoot class="card-footer">

                  <tr>
                    <td colspan="5" class="text-end border-bottom-0"><strong>Total:</strong></td>
                    <td class="text-end border-bottom-0">${{$bookingInfo->total_cost}}</td>
                  </tr>
      		      </tfoot>

              </table>
            </div>
          </div>
        </div>
      </main>


      <!-- Footer -->
      <footer class="text-center mt-4">
        <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.</p>

        <div class="btn-group btn-group-sm d-print-none">
          <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a>
          <button type="button" id="btnExport" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</button>
        </div>
      </footer>
    </div>

    <!-- jQuery -->
    <script src="https://shikhbeshobai.com/public/frontend/assets/js/jquery-3.3.1.min.js"></script>
    <!-- PDF File Generate -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

    <script type="text/javascript">
      $("body").on("click", "#btnExport", function () {
          html2canvas($('#tblstudents')[0], {
              onrendered: function (canvas) {
                  var data = canvas.toDataURL();
                  var docDefinition = {
                      content: [{
                          image: data,
                          width: 500
                      }]
                  };
                  pdfMake.createPdf(docDefinition).download("invoice.pdf");
              }
          });
      });
    </script>

  </body>
</html>
