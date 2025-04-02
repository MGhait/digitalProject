<x-create-modal title="Add New Service">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name"/>
        @include('admin.error',['property' => 'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="fa fa-certificate"
               wire:model="icon"/>
        @include('admin.error',['property' => 'icon'])
    </div>
    <div class="col-md-12 mt-3">
        <label class="form-label">Desciption</label>
        <textarea class="form-control" placeholder="Description"
                  wire:model="description"></textarea>
        @include('admin.error',['property' => 'description'])
    </div>
</x-create-modal>
