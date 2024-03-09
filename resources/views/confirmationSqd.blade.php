@foreach ($sqd as $question)
    {{-- if SQD5 for Cashier Only --}}
    {{-- session(($question->question_no) == 0)  Means that the applicant purpose is not on the Cashier --}}
    @if (session($question->question_no) == 0)
        <tr class="bg-white">
            <td><strong>{{ strtoupper($question->question_no) }}</strong> </td>
            <td>{{ $question->question }}</td>
            <td rowspan="2">
                <button disabled="disabled" class="btn btn-secondary btn-sm">N/A</button>
            </td>
        </tr>
        <tr class="border-bottom">
            <td></td>
            <td>
                <i>Not Applicable</i>
            </td>
        </tr>
    @else
        <tr>
            <td><strong>{{ strtoupper($question->question_no) }}</strong> </td>
            <td>{{ $question->question }}</td>
            <td rowspan="2">
                <a href="{{ route($question->question_no . 'Star') }}" class="btn btn-primary btn-sm rounded-1 btn-edit"
                    type="button" data-toggle="tooltip" data-placement="top" title="Edit">
                    <i class="fa fa-edit mr-1"></i>
                    Edit
                </a>
            </td>
        </tr>
        <tr class="border-bottom">
            <td></td>
            <td>
                <span class="fa fa-circle bg-danger"></span>
                {{ session($question->question_no) }}
            </td>
        </tr>
    @endif
@endforeach
