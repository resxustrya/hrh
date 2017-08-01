<div class="modal-body">
    {{ $user->fname.' '.$user->lname }}
</div>

<div class="modal-footer no-margin-top">
    <a href="{{ asset('profile').'/'.$user->id }}" class="btn btn-sm btn-info">
        <i class="ace-icon fa fa-heart-o"></i>
        View Profile
    </a>
</div>