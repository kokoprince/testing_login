<div>
    <form wire:submit.prevent='login'>
        <input type="text" wire:model="name" class="text" placeholder="enter name"><br>
            @error('name')
            <span class="error" style="color: red">{{ $message }}</span>
            @enderror
            <br><input type="password" wire:model="pass" placeholder="enter pass"><br>
        @error('pass')
        <span class="error" style="color: red">{{ $message }}</span>
        @enderror
        <br><button type="submit" class="btn btn-primary" >login</button>
    </form>
</div>
