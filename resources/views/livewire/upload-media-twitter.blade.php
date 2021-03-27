<div>
    <div class="card card-primary">
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="tweetBody">Tweet</label>
                    <textarea rows="4" cols="50" placeholder="Tweet..." class="form-control" wire:model.lazy="tweetBody" id="tweetBody"></textarea>
                    @error('tweetBody') <span class="error text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" wire:model.lazy="tweetMedia">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button wire:click.prevent="postTweet" class="btn btn-primary" style="background-color:#70BEBE; color: white; border-radius: 15px; border-color:#70BEBE ">Submit</button>
            </div>
        </form>
    </div>
</div>
<script>
    document.addEventListener('livewire:load', function () {

        $(function () {
            bsCustomFileInput.init();
        });
    })
    document.addEventListener('livewire:update', function () {
        $(function () {
            bsCustomFileInput.init();
        });

    })
</script>
