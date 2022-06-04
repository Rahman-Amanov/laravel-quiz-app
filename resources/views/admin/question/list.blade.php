<x-app-layout>
    <x-slot name="header">
        {{ $quiz->title }} Quizine ait sorular
    </x-slot>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-right">
                <a href="{{ route('questions.create',$quiz->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Soru olustur</a>
            </h5>
            <h5 class="card-title">
                <a href="{{ route('quizzes.index' )}}" class="btn btn-sm btn-secondary"><i class="fa fa-arrow-left"></i> Quizlere  Don</a>
            </h5>
            <table class="table table-bordered table-sm">
                <thead>
                  <tr>
                    <th scope="col">Soru</th>
                    <th scope="col">Fotograf</th>
                    <th scope="col">1. Cevap</th>
                    <th scope="col">2. Cevap</th>
                    <th scope="col">3.cu Cevap</th>
                    <th scope="col">4. Cevap</th>
                    <th scope="col">Dogru Cevap</th>
                    <th scope="col" style="width: 100px;">Islemler</th>
                  </tr>
                  @foreach ($quiz->questions as $question)
                    <tr>
                        <td>{{ $question->question }}</td>
                        <td>
                            @if($question->image)
                                <a href="{{ asset($question->image) }}" class="btn btn-light btn-sm" target="_blank">Goruntule</a>
                            @endif
                        </td>
                        <td>{{ $question->answer1 }}</td>
                        <td>{{ $question->answer2 }}</td>
                        <td>{{ $question->answer3 }}</td>
                        <td>{{ $question->answer4 }}</td>
                        <td class="text-success">{{Str::substr($question->correct_answer, -1)  }}. Cevap</td>
                        <td>
                            <a href="{{ route('questions.edit',[$quiz->id,$question->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                            <a href="{{ route('questions.destroy',[$quiz->id,$question->id]) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </thead>
                <tbody>

                </tbody>
              </table>

        </div>
    </div>
</x-app-layout>
