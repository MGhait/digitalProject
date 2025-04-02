<x-show-modal title="Show Service">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name" disabled/>
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="fa fa-certificate"
               wire:model="icon" disabled/>
    </div>
    <div class="col-md-12 mt-3">
        <label class="form-label">Desciption</label>
        <textarea class="form-control" placeholder="Description"
                  wire:model="description" disabled></textarea>
        @include('admin.error',['property' => 'description'])
    </div>
</x-show-modal>
