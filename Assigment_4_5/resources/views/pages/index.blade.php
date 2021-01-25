@extends('layouts.mainLayout')

@section('content')

<table class="table" id="customers_table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Personal ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($customers as $customer)
        <tr>
            <th scope="row">1</th>
            <td>{{$customer->personal_id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->customer_contact_information->email}}</td>
            <td>{{$customer->customer_contact_information->phone}}</td>
            {{-- <td>
                <a href="{{ route('customers.edit', ['customer_general_id' => $customer->id]) }}"
                    class="btn btn-sm btn-success">Edit</a>
            </td> --}}
            <td>
              <a href="{{ route('customers.edit', $customer->personal_id) }}"
                class="btn btn-sm btn-success">Edit</a>
            </td>
            <td>
                <button data-deleteurl="{{ route('customers.destroy', $customer->personal_id) }}"
                  onclick="deleteCustomer(event)" class="btn btn-sm btn-danger">Delete</button>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <script>
    function refreshCustomerTable() {
        $("#customers_table").load(location.href + " #customers_table");
    }

    function deleteCustomer(e) {
        e.preventDefault();

        $.ajax({
            url: $(e.target).data('deleteurl'),
            type: 'DELETE',
            success: function(data) {
                refreshCustomerTable();
            }
        });
    }

</script>
  
  @endsection