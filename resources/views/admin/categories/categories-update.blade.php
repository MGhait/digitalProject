<x-update-modal title="Edit Category">
    <div class="col-md-12 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name"/>
        @include('admin.error',['property' => 'name'])
    </div>
</x-update-modal>
