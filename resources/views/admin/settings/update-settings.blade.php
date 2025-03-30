<form class="row" wire:submit.prevent="submit">
    @if(session()->has('message'))
        <div class="alert alert-primary success-alert">{{ session('message') }}</div>
    @endif
    <div class="col-md-6">
        <label class="form-label">Name</label>
        <input
            type="text"
            class="form-control"
            placeholder="Name"
            wire:model="settings.name"
        />
        @error('settings.name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6">
        <label class="form-label">Email</label>
        <input
            type="text"
            class="form-control"
            placeholder="Email"
            wire:model="settings.email"
        />
        @include('admin.error',['property' => 'settings.email'])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Address</label>
        <input
            type="text"
            class="form-control"
            placeholder="Address"
            wire:model="settings.address"
        />
        @include('admin.error',['property' => 'settings.address'])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Phone</label>
        <input
            type="text"
            class="form-control"
            placeholder="Phone"
            wire:model="settings.phone"
        />
        @include('admin.error',['property' => 'settings.phone'])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Facebook</label>
        <input
            type="text"
            class="form-control"
            placeholder="Facebook"
            wire:model="settings.facebook"
        />
        @include('admin.error',['property' => 'settings.facebook'])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Twitter</label>
        <input
            type="text"
            class="form-control"
            placeholder="Twitter"
            wire:model="settings.twitter"
        />
        @include('admin.error',['property' => 'settings.twitter'])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Linkedin</label>
        <input
            type="text"
            class="form-control"
            placeholder="Linkedin"
            wire:model="settings.linkedin"
        />
        @include('admin.error',['property' => 'settings.linkedin'])
    </div>
    <div class="col-md-6 mt-2">
        <label class="form-label">Instagram</label>
        <input
            type="text"
            class="form-control"
            placeholder="Instagram"
            wire:model="settings.instagram"
        />
        @include('admin.error',['property' => 'settings.instagram'])
    </div>
    <div class="col-md-12 mt-4">
        <button class="btn btn-primary">Submit</button>
    </div>
</form>
