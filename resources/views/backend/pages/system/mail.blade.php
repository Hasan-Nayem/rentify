@extends('backend.layout')
@section('content')
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Settings</div>
    <div class="ps-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Mail</li>
        </ol>
      </nav>
    </div>
    <div class="ms-auto">
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Settings</button>
        <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
          <a class="dropdown-item" href="javascript:;">Another action</a>
          <a class="dropdown-item" href="javascript:;">Something else here</a>
          <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
        </div>
      </div>
    </div>
  </div>
<div class="card">
    <div class="card-header py-3">
      <h6 class="mb-0">Mail Settings</h6>
    </div>
    <div class="card-body">
       <div class="row">
         <div class="col-12 col-lg-12 d-flex">
           <div class="card border shadow-none w-100">
             <div class="card-body">
               <form class="row g-3" method="POST" action="{{ route('mail.update') }}">
                 @csrf
                 <div class="col-6">
                   <label class="form-label">Mail Mailer</label>
                   <select name="mail_mailer" class="form-select @error('mail_mailer') is-invalid @enderror">
                     <option value="smtp" {{ old('mail_mailer', $mailConfig['mail_mailer']) == 'smtp' ? 'selected' : '' }}>SMTP</option>
                     <option value="sendmail" {{ old('mail_mailer', $mailConfig['mail_mailer']) == 'sendmail' ? 'selected' : '' }}>Sendmail</option>
                     <option value="log" {{ old('mail_mailer', $mailConfig['mail_mailer']) == 'log' ? 'selected' : '' }}>Log (Local)</option>
                   </select>
                   @error('mail_mailer')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                 </div>
                 <div class="col-6">
                   <label class="form-label">Mail Host</label>
                   <input type="text" name="mail_host" class="form-control @error('mail_host') is-invalid @enderror" placeholder="smtp.gmail.com" value="{{ old('mail_host', $mailConfig['mail_host']) }}">
                   @error('mail_host')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                 </div>
                 <div class="col-6">
                   <label class="form-label">Port</label>
                   <input type="text" name="mail_port" class="form-control @error('mail_port') is-invalid @enderror" placeholder="587" value="{{ old('mail_port', $mailConfig['mail_port']) }}">
                   @error('mail_port')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                 </div>
                 <div class="col-6">
                   <label class="form-label">Encryption Type</label>
                   <select name="mail_encryption" class="form-select @error('mail_encryption') is-invalid @enderror">
                     <option value="tls" {{ old('mail_encryption', $mailConfig['mail_encryption']) == 'tls' ? 'selected' : '' }}>TLS</option>
                     <option value="ssl" {{ old('mail_encryption', $mailConfig['mail_encryption']) == 'ssl' ? 'selected' : '' }}>SSL</option>
                     <option value="" {{ old('mail_encryption', $mailConfig['mail_encryption']) == '' ? 'selected' : '' }}>None</option>
                   </select>
                   @error('mail_encryption')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                 </div>
                 <div class="col-6">
                   <label class="form-label">Username</label>
                   <input type="text" name="mail_username" class="form-control @error('mail_username') is-invalid @enderror" placeholder="your@email.com" value="{{ old('mail_username', $mailConfig['mail_username']) }}">
                   @error('mail_username')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                 </div>
                 <div class="col-6">
                   <label class="form-label">Password / App Password</label>
                   <input type="password" name="mail_password" class="form-control @error('mail_password') is-invalid @enderror" placeholder="Leave blank to keep current">
                   @error('mail_password')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                   <small class="text-muted">Only fill this if you want to change the password.</small>
                 </div>
                 <div class="col-6">
                   <label class="form-label">From Address</label>
                   <input type="email" name="mail_from_address" class="form-control @error('mail_from_address') is-invalid @enderror" placeholder="noreply@example.com" value="{{ old('mail_from_address', $mailConfig['mail_from_address']) }}">
                   @error('mail_from_address')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                 </div>
                 <div class="col-6">
                   <label class="form-label">From Name</label>
                   <input type="text" name="mail_from_name" class="form-control @error('mail_from_name') is-invalid @enderror" placeholder="Rentaly" value="{{ old('mail_from_name', $mailConfig['mail_from_name']) }}">
                   @error('mail_from_name')
                     <div class="invalid-feedback">{{ $message }}</div>
                   @enderror
                 </div>
                 <div class="col-12">
                   <div class="d-grid">
                     <button class="btn btn-primary"><i class="bi bi-envelope-paper me-2"></i>Save Mail Settings</button>
                   </div>
                 </div>
               </form>
             </div>
           </div>
         </div>
       </div>
    </div>
  </div>
@endsection