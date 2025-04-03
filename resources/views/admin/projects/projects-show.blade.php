<x-show-modal title="Show Project">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" wire:model="name" disabled/>
    </div>
    <div class="col-md-6 mt-0">
        <label class="form-label">Category</label>
        <input type="url" class="form-control"
               wire:model="category" disabled/>
    </div>
    <div class="col-md-12 mb-0">
        <label class="form-label">Link</label>
        <input type="url" class="form-control"
               wire:model="link" disabled/>
    </div>

    <div class="col-md-12 mt-3">
        <label class="form-label">Desciption</label>
        <textarea class="form-control"
                  wire:model="description" disabled></textarea>
    </div>
    <div class="col-md-12 mt-3">
        <label class="form-label">Image</label>
        @if ($image)
            <img class="form-control image-preview mx-3 mt-3" src="{{ asset($image)}}" style="max-height: 250px">
        @endif
    </div>

</x-show-modal>
