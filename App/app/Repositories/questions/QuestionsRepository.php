<?php
namespace App\Repositories\Questions;

use App\Models\Questions\Questions;
use App\Repositories\BaseRepository;

class QuestionsRepository extends BaseRepository
{

    protected $model;
    public function __construct(Questions $Questions)
    {
        parent::__construct($Questions);
    }

    public function index(){
        return $this->model->paginate();
    }

    
}
