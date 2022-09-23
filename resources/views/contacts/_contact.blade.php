{{-- <tr @if ($loop->even) class="table-primary" @endif> --}}
</tr>
{{-- <th scope="row"> {{ $loop->index }}</th> --}}
<th scope="row">1</th>
<td>{{ $cont['name'] }}</td>
<td>{{ $cont['phone'] }}</td>
<td>alfred@test.com</td>
<td>Company one</td>
<td width="150">
    <a href="{{ route('contacts.show', $cont['id']) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i
            class="fa fa-eye"></i></a>
    <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
    <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete"
        onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a>
</td>
</tr>
