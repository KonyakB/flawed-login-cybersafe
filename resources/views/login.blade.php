@extends('layouts.app')

@section('title', 'Robotics Login')

@section('content')
<div class="robotics-bg">
    <div class="robotics-card">
        <div class="robotics-icon">
            <!-- Robot face SVG -->
            <svg width="60" height="60" viewBox="0 0 60 60" fill="none">
                <rect x="10" y="20" width="40" height="25" rx="8" fill="#ECEFF1" stroke="#90A4AE" stroke-width="2"/>
                <circle cx="22" cy="32" r="4" fill="#757575"/>
                <circle cx="38" cy="32" r="4" fill="#757575"/>
                <rect x="25" y="40" width="10" height="3" rx="1.5" fill="#FFD600"/>
                <rect x="28" y="10" width="4" height="10" rx="2" fill="#90A4AE"/>
            </svg>
        </div>
        <h2>Operator Login</h2>
        <form method="POST" action="{{ route('login') }}">
            <div class="robotics-form-group">
                <label for="username">Username:</label>
                <input id="username" type="text" name="username" required autofocus class="robotics-input">
            </div>
            <div class="robotics-form-group">
                <label for="password">Password:</label>
                <input id="password" type="password" name="password" required class="robotics-input">
            </div>
            <button type="submit" class="robotics-btn">
                <span>Login</span>
                <!-- Robot arm icon on button -->
                <svg width="18" height="18" viewBox="0 0 18 18" style="vertical-align: middle; margin-left: 6px;" fill="none">
                    <rect x="3" y="13" width="12" height="3" rx="1" fill="#FFD600"/>
                    <rect x="8" y="5" width="2" height="8" rx="1" fill="#90A4AE"/>
                    <circle cx="9" cy="4" r="2" fill="#757575"/>
                </svg>
            </button>
            @if(session('error'))
                <div class="robotics-error">{{ session('error') }}</div>
            @endif
        </form>
    </div>
</div>
@endsection

@push('styles')
<style>
.robotics-bg {
    min-height: 100vh;
    background: linear-gradient(135deg, #F5F5F5 0%, #ECEFF1 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}
.robotics-card {
    background: #FFFFFF;
    border: 2px solid #FFD600;
    border-radius: 16px;
    padding: 48px 36px;
    box-shadow: 0 6px 24px rgba(200, 200, 200, 0.25);
    text-align: center;
    max-width: 400px;
}
.robotics-icon {
    margin-bottom: 24px;
}
.robotics-form-group {
    margin-bottom: 20px;
    text-align: left;
}
.robotics-form-group label {
    color: #607D8B;
    font-weight: bold;
    margin-bottom: 6px;
    display: block;
}
.robotics-input {
    width: 100%;
    padding: 10px;
    border: 1px solid #90A4AE;
    border-radius: 6px;
    background: #FAFAFA;
    color: #263238;
    font-size: 1rem;
}
.robotics-btn {
    background: #FFD600;
    color: #263238;
    border: none;
    border-radius: 6px;
    padding: 12px 28px;
    font-size: 1.1rem;
    font-weight: bold;
    cursor: pointer;
    margin-top: 12px;
    display: inline-flex;
    align-items: center;
    transition: background 0.2s;
}
.robotics-btn:hover {
    background: #FFF59D;
}
.robotics-error {
    margin-top: 18px;
    color: #D32F2F;
    font-weight: bold;
}
h2 {
    color: #263238;
    font-weight: 700;
}
</style>
@endpush

