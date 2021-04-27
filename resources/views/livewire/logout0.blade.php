<div>
    <form wire:submit.prevent="logout">
        you are login user name: {{ Auth::user()->name }} <span style="width: 25px"></span> <button type="submit" class="btn btn-dark">logout</button>
    </form>
</div>
