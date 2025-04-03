<x-create-modal title="Add New Member">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name"/>
        @include('admin.error',['property' => 'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Position</label>
        <input type="text" class="form-control" placeholder="Position"
               wire:model="position"/>
        @include('admin.error',['property' => 'position'])
    </div>

    <div class="col-md-6 mt-3">
        <label class="form-label">Facebook</label>
        <input type="url" class="form-control" placeholder="Facebook" wire:model="facebook"/>
        @include('admin.error',['property' => 'facebook'])
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Linkedin</label>
        <input type="url" class="form-control" placeholder="Linkedin"
               wire:model="linkedin"/>
        @include('admin.error',['property' => 'linkedin'])
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Twitter</label>
        <input type="url" class="form-control" placeholder="Twitter"
               wire:model="twitter"/>
        @include('admin.error',['property' => 'twitter'])
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Instagram</label>
        <input type="url" class="form-control" placeholder="Instagram" wire:model="instagram"/>
        @include('admin.error',['property' => 'instagram'])
    </div>

    <div class="col-md-12 mt-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" placeholder="Image" wire:model="image"/>
        <div wire:loading wire:target="image">Uploading...</div>
        @include('admin.error',['property' => 'image'])
    </div>

    @if ($image)
        <img class="form-control image-preview mx-3 mt-3" src="{{ $image->temporaryUrl() }}">
    @endif

</x-create-modal>

