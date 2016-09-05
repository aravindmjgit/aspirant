<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PublishBatchdetailsRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    public function rules() {
        switch ($this->method()) {
            case 'GET':
            case 'DELETE': {
                    return [];
                }
            case 'POST': {
                    return [
//                        'batch' => 'required',
//                        'syllabus' => 'required',
//                        'time_shift' => 'required',
//                        'year' => 'required',
//                        'in_charge' => 'required',
                    ];
                }
            case 'PUT':
            case 'PATCH': {
                    return [
//                        'batch' => 'required',
//                        'syllabus' => 'required',
//                        'time_shift' => 'required',
//                        'year' => 'required',
//                        'in_charge' => 'required',
                    ];
                }
            default:break;
        }
    }

}
