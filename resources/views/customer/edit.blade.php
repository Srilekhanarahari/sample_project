<h1>Edit Customer details</h1>

<form action="/customers/{{$customer->id}}" method="post">

    @method('PATCH')

    @include('customer.form')
    <button>Save Customer</button>
</form>