<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SystemSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SystemSettingsController extends Controller
{
    // ===================== PROFILE =====================

    public function profile()
    {
        $user = Auth::user();
        return view('backend.pages.system.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048'],
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        // Handle avatar upload
        $uploadPath = public_path('frontend/images/avatars');
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        if ($request->hasFile('avatar')) {
            // Remove old avatar
            if (!empty($user->avatar) && file_exists(public_path($user->avatar))) {
                unlink(public_path($user->avatar));
            }

            $avatar = $request->file('avatar');
            $avatarName = 'avatar_' . $user->id . '_' . time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move($uploadPath, $avatarName);
            $user->avatar = 'frontend/images/avatars/' . $avatarName;
        }

        $user->save();

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

    // ===================== SYSTEM =====================

    public function system()
    {
        $settings = SystemSetting::first();
        return view('backend.pages.system.system', compact('settings'));
    }

    public function updateSystem(Request $request)
    {
        $request->validate([
            'system_name' => ['nullable', 'string', 'max:255'],
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048'],
            'favicon' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg,ico,webp', 'max:1024'],
            'copyright' => ['nullable', 'string', 'max:500'],
            'address' => ['nullable', 'string', 'max:1000'],
        ]);

        $settings = SystemSetting::first();
        if (!$settings) {
            $settings = new SystemSetting();
        }

        $settings->system_name = $request->system_name;
        $settings->copyright = $request->copyright;
        $settings->address = $request->address;

        $uploadPath = public_path('frontend/images');
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        if ($request->hasFile('logo')) {
            // Remove old logo
            if (!empty($settings->logo) && file_exists(public_path($settings->logo))) {
                unlink(public_path($settings->logo));
            }

            $logo = $request->file('logo');
            $logoName = 'logo_' . time() . '.' . $logo->getClientOriginalExtension();
            $logo->move($uploadPath, $logoName);
            $settings->logo = 'frontend/images/' . $logoName;
        }

        if ($request->hasFile('favicon')) {
            // Remove old favicon
            if (!empty($settings->favicon) && file_exists(public_path($settings->favicon))) {
                unlink(public_path($settings->favicon));
            }

            $favicon = $request->file('favicon');
            $faviconName = 'favicon_' . time() . '.' . $favicon->getClientOriginalExtension();
            $favicon->move($uploadPath, $faviconName);
            $settings->favicon = 'frontend/images/' . $faviconName;
        }

        $settings->save();

        return redirect()->route('system.index')->with('success', 'System settings updated successfully.');
    }

    // ===================== MAIL =====================

    public function mail()
    {
        $mailConfig = [
            'mail_mailer' => env('MAIL_MAILER', 'smtp'),
            'mail_host' => env('MAIL_HOST', ''),
            'mail_port' => env('MAIL_PORT', '587'),
            'mail_username' => env('MAIL_USERNAME', ''),
            'mail_password' => env('MAIL_PASSWORD', ''),
            'mail_encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'mail_from_address' => env('MAIL_FROM_ADDRESS', ''),
            'mail_from_name' => env('MAIL_FROM_NAME', ''),
        ];

        return view('backend.pages.system.mail', compact('mailConfig'));
    }

    public function updateMail(Request $request)
    {
        $request->validate([
            'mail_mailer' => ['required', 'string', 'max:50'],
            'mail_host' => ['required', 'string', 'max:255'],
            'mail_port' => ['required', 'string', 'max:10'],
            'mail_username' => ['nullable', 'string', 'max:255'],
            'mail_password' => ['nullable', 'string', 'max:255'],
            'mail_encryption' => ['nullable', 'string', 'max:50'],
            'mail_from_address' => ['nullable', 'email', 'max:255'],
            'mail_from_name' => ['nullable', 'string', 'max:255'],
        ]);

        $envFile = base_path('.env');
        $envContent = file_get_contents($envFile);

        $replacements = [
            'MAIL_MAILER' => $request->mail_mailer,
            'MAIL_HOST' => $request->mail_host,
            'MAIL_PORT' => $request->mail_port,
            'MAIL_USERNAME' => $request->mail_username ?? '',
            'MAIL_ENCRYPTION' => $request->mail_encryption ?? '',
            'MAIL_FROM_ADDRESS' => $request->mail_from_address ?? '',
            'MAIL_FROM_NAME' => $request->mail_from_name ?? '',
        ];

        // Only update password if a new one was provided (don't wipe it)
        if ($request->filled('mail_password')) {
            $replacements['MAIL_PASSWORD'] = $request->mail_password;
        }

        foreach ($replacements as $key => $value) {
            $escapedKey = preg_quote($key, '/');
            $pattern = "/^{$escapedKey}=.*/m";
            $replacement = "{$key}={$value}";

            if (preg_match($pattern, $envContent)) {
                $envContent = preg_replace($pattern, $replacement, $envContent);
            } else {
                $envContent .= PHP_EOL . $replacement;
            }
        }

        file_put_contents($envFile, $envContent);

        // Clear config cache so changes take effect immediately
        Artisan::call('config:clear');

        return redirect()->route('mail.index')->with('success', 'Mail settings updated successfully.');
    }
}
