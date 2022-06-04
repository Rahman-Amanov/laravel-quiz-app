<x-app-layout>
    <x-slot name="header">
        Quizler
    </x-slot>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-right">
                <a href="{{ route('quizzes.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Quiz olustur</a>
            </h5>
            <form action="" method="GET">
                <div class="form-row">
                    <div class="col-md-2">
                        <input type="text" name="title" value="{{ request()->get('title') }}" placeholder="Quiz Adi" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <select class="form-control" onchange="this.form.submit()" name="status">
                            <option value="">Durum Seciniz</option>
                            <option @if(request()->get('status')=='publish') selected @endif value="publish">Aktif</option>
                            <option @if(request()->get('status')=='passive') selected @endif value="passive">Pasif</option>
                            <option @if(request()->get('status')=='draft') selected @endif value="draft">Taslak</option>
                        </select>
                    </div>
                    @if(request()->get('title') || request()->get('status'))
                        <div class="col-md-2">
                            <a href="{{ route('quizzes.index') }}" class="btn btn-secondary">Sifirla</a>
                        </div>
                    @endif
                </div>
            </form>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Quiz</th>
                    <th scope="col">Soru sayisi</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Bitis Tarihi</th>
                    <th scope="col">Islemler</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($quizzes as $quiz)
                    <tr>
                        <td>{{ $quiz->title }}</td>
                        <td>{{ $quiz->questions_count }}</td>
                        <td>
                            @switch( $quiz->status)
                                @case('publish')
                                    @if(!$quiz->finished_at)
                                        <span class="badge badge-success">Aktif</span>
                                    @elseif ( $quiz->finished_at > now())
                                        <span class="badge badge-success">Aktif</span>
                                    @else
                                        <span class="badge badge-secondary text-white">Tarihi Dolmus</span>
                                    @endif
                                @break
                                @case('passive')
                                    <span class="badge badge-danger">Pasif</span>
                                @break
                                @case('draft')
                                    <span class="badge badge-warning">Taslak</span>
                                @break



                            @endswitch

                        </td>
                        <td><span title="{{ $quiz->finished_at }}">
                            {{ $quiz->finished_at ? $quiz->finished_at->diffForHumans() : ' ' }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('quizzes.details',$quiz->id) }}" class="btn btn-sm btn-secondary">
                                <i class="fa fa-info-circle"></i>
                            </a>
                            <a href="{{ route('questions.index',$quiz->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-question"></i>
                            </a>
                            <a href="{{ route('quizzes.edit',$quiz->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                            <a href="{{ route('quizzes.destroy',$quiz->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              {{ $quizzes->withQueryString()->links() }}
        </div>
    </div>
</x-app-layout>