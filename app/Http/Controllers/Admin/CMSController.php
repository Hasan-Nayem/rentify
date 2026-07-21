<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PageEnum;
use App\Enums\SectionEnum;
use App\Http\Controllers\Controller;
use App\Models\CMS;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CMSController extends Controller
{
    public function index(Request $request)
    {
        $sections = [];
        foreach (SectionEnum::cases() as $section) {
            $data = CMS::where('page', PageEnum::HOMEPAGE->value)
                ->where('section', $section->value)
                ->first();
            $sections[] = [
                'page' => PageEnum::HOMEPAGE->value,
                'section' => $section->value,
                'section_label' => $section->label(),
                'status' => $data ? 'Saved' : 'Not Set',
                'updated_at' => $data ? $data->updated_at->format('M d Y, h:i A') : '—',
            ];
        }

        return view('backend.layouts.cms.index', compact('sections'));
    }

    public function editOrCreate($page, $section = null)
    {
        try {
            $pageEnum = PageEnum::from($page);
            $sectionEnum = SectionEnum::from($section);
        } catch (\ValueError $e) {
            abort(404);
        }

        $data = CMS::where('page', $pageEnum->value)
            ->where('section', $sectionEnum->value)
            ->latest()
            ->first();

        return view('backend.layouts.cms.edit', [
            'data' => $data,
            'pageEnum' => $pageEnum,
            'sectionEnum' => $sectionEnum,
        ]);
    }

    public function updateOrCreate(Request $request)
    {
        $validated = $request->validate([
            'page' => 'required|string',
            'section' => 'required|string',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'btn1' => 'nullable|string',
            'btn2' => 'nullable|string',
            'header' => 'nullable|string',
            'image1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'image2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'image3' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'list' => 'nullable|array',
            'list.*.title' => 'nullable|string|max:255',
            'list.*.description' => 'nullable|string',
            'sub_title_one' => 'nullable|string',
            'sub_des_one' => 'nullable|string',
            'sub_image_one' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'sub_title_two' => 'nullable|string',
            'sub_des_two' => 'nullable|string',
            'sub_image_two' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'sub_title_three' => 'nullable|string',
            'sub_des_three' => 'nullable|string',
            'sub_image_three' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            'sub_title_four' => 'nullable|string',
            'sub_des_four' => 'nullable|string',
            'sub_image_four' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',
            // Testimonials
            'sub_list_one' => 'nullable|array',
            'sub_list_one.*.title' => 'nullable|string|max:255',
            'sub_list_one.*.description' => 'nullable|string',
            'sub_list_one.*.author' => 'nullable|string|max:255',
        ]);

        $pageEnum = PageEnum::tryFrom($validated['page']);
        $sectionEnum = SectionEnum::tryFrom($validated['section']);

        if (!$pageEnum || !$sectionEnum) {
            return back()->with('error', 'Invalid page or section.');
        }

        DB::transaction(function () use ($validated, $request, $pageEnum, $sectionEnum) {
            $cms = CMS::firstOrNew([
                'page' => $pageEnum->value,
                'section' => $sectionEnum->value,
            ]);

            // Handle image uploads
            $imageFields = ['image1', 'image2', 'image3', 'sub_image_one', 'sub_image_two', 'sub_image_three', 'sub_image_four'];

            foreach ($imageFields as $field) {
                if ($request->hasFile($field)) {
                    if ($cms->$field) {
                        $oldPath = str_replace('storage/', '', $cms->$field);
                        Storage::disk('public')->delete($oldPath);
                    }
                    $path = $request->file($field)->store('uploads/cms', 'public');
                    $cms->$field = 'storage/' . $path;
                }
            }

            // Assign other validated fields
            $fillable = collect($validated)
                ->except(array_merge($imageFields, ['page', 'section']))
                ->reject(fn($v) => is_null($v))
                ->toArray();

            $cms->fill($fillable);
            $cms->save();
        });

        return back()->with('success', 'CMS section saved successfully.');
    }
}
