@props([ 'confirm' => null, 'cancel' => null, 'show'=> null ])

@if($show)
        <input type="checkbox" id="delete-modal" class="modal-toggle" checked />
        <div class="modal" role="dialog">
            <div class="modal-box">
                <h3 class="text-lg font-bold text-error">Confirm Deletion</h3>
                <p class="py-4">Are you sure you want to delete this task?</p>


                <div class="modal-action">

                    <button wire:click="{{ $confirm }} "class="btn btn-error">Yes, Delete</button>
                    <label for="delete-modal" @if($cancel) wire:click="{{ $cancel }}" class="btn">
                        Cancel
                    </label>

                </div>
            </div>
        </div>
                    @endif
@endif
