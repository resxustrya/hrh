<div class="modal-body">
    <div class="align-center">
        <div class="info">
            <h3 class="lighter block green">{{ $user->fname.' '.$user->lname }}</h3>
            <div class="desc">{{ hrhController::hrh_type($user->hrh_type) }}</div>
            <div class="desc">{{ hrhController::hrh_province($user->province) }}</div>
            <div class="desc">{{ hrhController::hrh_municipality($user->municipality) }}</div>
        </div>
    </div>
</div>

<div class="modal-footer no-margin-top">
    <a href="{{ asset('profile').'/'.$user->id }}" class="btn btn-sm btn-info">
        <i class="ace-icon fa fa-heart-o"></i>
        View Profile
    </a>
</div>