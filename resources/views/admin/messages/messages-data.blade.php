<div>
    <div>
        <input class="form-control mb-3" type="text" wire:model.live="search" placeholder="Search">
    </div>
    <div class="table-responsive text-nowrap">
        @if(count($data))
            <table class="table">
                <thead>
                <tr>
                    <th width="30%">Name</th>
                    <th width="30%">Email</th>
                    <th width="20%">Subject</th>
                    <th width="100%">Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                @foreach($data as $record)
                    <tr>
                        <td>
                            <strong>{{ $record->name }}</strong>
                        </td>
                        <td>{{ $record->email }}</td>
                        <td>{{ $record->subject }}</td>
                        <td>
                            <span class="{{ $record->status == '0' ? 'text-danger' : 'text-primary' }}">
                                {{ $record->status == '0' ? 'Not Seen' : 'Seen' }}
                            </span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"
                                       wire:click.prevent="$dispatch('deleteMessage', { id: {{ $record->id }} })">
                                        <i class="bx bx-trash me-1"></i>
                                        Delete
                                    </a>
                                    <a class="dropdown-item" href="#"
                                       wire:click.prevent="$dispatch('showMessage', { id: {{ $record->id }} })">
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
