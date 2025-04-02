<x-update-modal title="Edit Project">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name"/>
        @include('admin.error',['property' => 'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Link</label>
        <input type="url" class="form-control" placeholder="Link"
               wire:model="link"/>
        @include('admin.error',['property' => 'link'])
    </div>

    <div class="col-md-6 mt-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" placeholder="Image" wire:model="image"/>
        <div wire:loading wire:target="image">Uploading...</div>
        @include('admin.error',['property' => 'image'])
    </div>
    <div class="col-md-6 mt-3">
        <label class="form-label">Category</label>
        <select class="form-control" wire:model="category_id">
            <option value="">Select Category</option>
            @if(count($categories) > 0)
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                            wire:key="category-{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            @endif
        </select>
        @include('admin.error',['property' => 'category_id'])
    </div>

    @if ($image)
        <img class="form-control image-preview mx-3 mt-3" src="{{ $image->temporaryUrl() }}"
             wire:key="photo-{{ $image->getFilename() }}">
    @endif

    <div class="col-md-12 mt-3">
        <label class="form-label">Desciption</label>
        <textarea class="form-control" placeholder="Description"
                  wire:model="description"></textarea>
        @include('admin.error',['property' => 'description'])
    </div>
</x-update-modal>
