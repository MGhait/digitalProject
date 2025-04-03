<x-show-modal title="Show Member">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" wire:model="name" disabled/>
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Position</label>
        <input type="text" class="form-control"
               wire:model="position" disabled/>
    </div>

    <div class="col-md-6 mt-3">
        <label class="form-label">Facebook</label>
        <input type="url" class="form-control" wire:model="facebook" disabled/>
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Linkedin</label>
        <input type="url" class="form-control"
               wire:model="linkedin" disabled/>
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Twitter</label>
        <input type="url" class="form-control"
               wire:model="twitter" disabled/>
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Instagram</label>
        <input type="url" class="form-control" wire:model="instagram" disabled/>
    </div>

    <div class="col-md-12 mt-3">
        <label class="form-label">Image</label>
        @if ($image)
            <img class="form-control image-preview mx-3 mt-3" src="{{ asset($image) }}" style="max-height: 200px">
        @endif
    </div>

</x-show-modal>

