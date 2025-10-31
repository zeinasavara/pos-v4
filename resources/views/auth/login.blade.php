<x-guest-layout>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="card">
            <div class="card-body p-5">
                <div class="login-userheading">
                    <h3>Masuk</h3>
                    <h4>Akses panel aplikasi menggunakan email dan kata sandi Anda.</h4>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email <code>*</code></label>
                    <div class="input-group">
                        <input type="text" name="email" value="{{ old('email') }}" placeholder="Masukkan email anda"
                            class="form-control border-end-0" autofocus>
                        <span class="input-group-text border-start-0">
                            <i class="ti ti-mail"></i>
                        </span>
                    </div>
                    @error('email')
                        <x-input-error :message="$message" />
                    @enderror

                </div>
                <div class="mb-3">
                    <label class="form-label">Password <code>*</code></label>
                    <div class="pass-group">
                        <input type="password" name="password" placeholder="****************"
                            class="form-control pass-input">
                        <span class="ti toggle-password ti-eye-off text-gray-9"></span>
                    </div>
                    @error('password')
                        <x-input-error :message="$message" />
                    @enderror
                </div>
                <div class="form-login">
                    <button type="submit" class="btn btn-primary w-100">Masuk Aplikasi</button>
                </div>
            </div>
        </div>
    </form>

</x-guest-layout>
