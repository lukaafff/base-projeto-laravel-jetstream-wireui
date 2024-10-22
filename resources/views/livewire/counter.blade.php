<!-- resources/views/livewire/counter.blade.php -->
<div>
    <x-w-button label="None" x-on:click="$openModal('blur-none')" primary />

    <x-w-modal name="blur-none" blurless>
        <x-w-card title="Blur SM">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        </x-w-card>
    </x-w-modal>

</div>
