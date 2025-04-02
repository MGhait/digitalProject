<x-show-modal title="Show Service">
    <div class="col-md-6 mb-0">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" wire:model="name" disabled/>
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Email</label>
        <input type="text" class="form-control"
               wire:model="email" disabled/>
    </div>
    <div class="col-md-12 mt-3">
        <label class="form-label">Subject</label>
        <input type="text" class="form-control"
               wire:model="subject" disabled/>
    </div>
    <div class="col-md-12 mt-3">
        <label class="form-label">Message</label>
        <textarea class="form-control"
                  wire:model="message" disabled></textarea>
    </div>
</x-show-modal>
