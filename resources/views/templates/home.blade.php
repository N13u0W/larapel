@include('templates.header')

<h1>bek</h1>

        <div class="bottom">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}

                    </div>
                    @endif
                    <h3 class="panel-title">Todo List</h3>
                    <ul>
                        @foreach($data as $d)
                        <li class="d-flex justify-content-between my-2">
                            <span>{{ $d->activity_name }}</span>
                            <div>
                                <a href="/update/ {{ $d->id }}"
                                    class="btn btn-warning text-light">
                                    <i class="fa-solid fa-edit"></i>
                                </a>
                                <form method="POST" action="{{ route('') }}">
                                    @method('DELETE')
                                    @csrf

                                    <button type="submit"btn btn-danger">
                                    <i1 class="fa-solid fa-trash"></i1>
                                </a>
                            </div>
                        </li>
                        @endforeach
                    </ul>

@include('templates.footer')


