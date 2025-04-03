<form wire:submit.prevent="submit">
{{--    @if(session()->has('message'))--}}
{{--        <div--}}
{{--            class="alert alert-success fixed top-0 left-1/2 transform -translate-x-1/2 mt-4 transition duration-300 z-50 shadow-lg rounded-lg py-3 px-6 min-w-[300px] text-center"--}}
{{--            x-data="{ show: true }"--}}
{{--            x-show="show"--}}
{{--            x-init="setTimeout(() => show = false, 2000)"--}}
{{--            x-transition:enter="transition ease-out duration-300"--}}
{{--            x-transition:enter-start="opacity-0 translate-y-4"--}}
{{--            x-transition:enter-end="opacity-100 translate-y-0"--}}
{{--            x-transition:leave="transition ease-in duration-300"--}}
{{--            x-transition:leave-start="opacity-100 translate-y-0"--}}
{{--            x-transition:leave-end="opacity-0 translate-y-4">--}}
{{--            {{ session('message') }}--}}
{{--        </div>--}}
{{--    @endif--}}
    @if(session()->has('message'))
        <div class="fixed top-4 left-1/2 -translate-x-1/2 z-[9999] w-full max-w-[300px]">
            <div class="alert alert-success shadow-lg rounded-lg py-3 px-6 text-center"
                 x-data="{ show: true }"
                 x-show="show"
                 x-init="setTimeout(() => show = false, 2000)"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 translate-y-4"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 translate-y-4">
                {{ session('message') }}
            </div>
        </div>
    @endif
    <div class="row g-3">
        <div class="col-md-6">
            <div class="form-floating">
                <input type="text" class="form-control" wire:model="name" placeholder="Your Name">
                <label>Your Name</label>
                @include('admin.error',['property' => 'name'])
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-floating">
                <input type="email" class="form-control" wire:model="email" placeholder="Your Email">
                <label>Your Email</label>
                @include('admin.error',['property' => 'email'])
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <input type="text" class="form-control" wire:model="subject" placeholder="Subject">
                <label>Subject</label>
                @include('admin.error',['property' => 'subject'])
            </div>
        </div>
        <div class="col-12">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a message here" wire:model="message"
                          style="height: 150px"></textarea>
                <label>Message</label>
                @include('admin.error',['property' => 'message'])
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary w-100 py-3" type="submit" wire:loading.attr="disabled">
                <span wire:loading.remove>Send Message</span>
                <span wire:loading>Sending...</span>
            </button>
        </div>
    </div>
</form>
