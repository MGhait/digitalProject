{{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
<x-update-modal title="Add New Project">
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
    <div class="col-md-12 mt-3">
        <label class="form-label">Desciption</label>
        <textarea class="form-control" placeholder="Description"
                  wire:model="description"></textarea>
        @include('admin.error',['property' => 'description'])
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

</x-update-modal>

