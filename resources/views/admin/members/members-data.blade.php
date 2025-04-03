<div>
    <div>
        <input class="form-control mb-3" type="text" wire:model.live="search" placeholder="Search">
    </div>
    <div class="table-responsive text-nowrap">
        @if(count($data))
            <table class="table">
                <thead>
                <tr>
                    <th width="40%">Name</th>
                    <th width="20%">Position</th>
                    <th width="30%">Image</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($data as $record)
                    <tr>
                        <td>
                            <strong>{{ $record->name }}</strong>
                        </td>
                        <td>
                            {{ $record->position }}
                        </td>
                        <td>
                            <img class="image-preview" src="{{ asset($record->image) }}" style="max-width: 75px">
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"
                                       wire:click.prevent="$dispatch('updateMember', { id: {{ $record->id }} })">
                                        <i class="bx bx-edit-alt me-1"></i>
                                        Edit
                                    </a>
                                    <a class="dropdown-item" href="#"
                                       wire:click.prevent="$dispatch('deleteMember', { id: {{ $record->id }} })">
                                        <i class="bx bx-trash me-1"></i>
                                        Delete
                                    </a>
                                    <a class="dropdown-item" href="#"
                                       wire:click.prevent="$dispatch('showMember', { id: {{ $record->id }} })">
                                        <i class="bx bx-show me-1"></i>
                                        Show
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        @else
            <span class="text-danger">No Records Found</span>
        @endif
    </div>
</div>
