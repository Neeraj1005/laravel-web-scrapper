<div>
    <x-alert />
    <form wire:submit.prevent="fetchLinked">
        @csrf
        <div class="mb-3">
            <label for="country_job" class="form-label">Select Country Jobs</label>
            <select wire:model="country" class="form-select mb-3" id="country_job">
                @forelse($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @empty
                @endforelse
            </select>
        </div>

        <div class="mb-3 visually-hidden">
            <label for="site_url" class="form-label">Site Url</label>
            <input wire:model="site_url" type="url" class="form-control" id="site_url" name="site_url"
                aria-describedby="site_url" readonly>
        </div>

        <button wire:loading.attr="disabled" class="btn btn-primary float-end" type="submit">
            <span wire:loading wire:target="fetchLinked" class="spinner-border spinner-border-sm" role="status"
                aria-hidden="true"></span>
            <span wire:loading.class="visually-hidden" wire:target="fetchLinked">Submit</span>
            <span wire:loading.class.remove="visually-hidden" wire:target="fetchLinked"
                class="visually-hidden">fetching...</span>
        </button>
    </form>

</div>
