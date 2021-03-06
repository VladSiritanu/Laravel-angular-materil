class CreatePostFormController{
    constructor(API, ToastService){
        'ngInject';

        this.API = API;
        this.ToastService = ToastService;
    }

    submit(){
        var data = {
            name: this.name,
            topic: this.topic
        };

        this.API.all('posts').post(data).then((response) => {
            this.ToastService.show('Post '+response.data.post.name+' added successfully');
    });
    }
}

export const CreatePostFormComponent = {
    templateUrl: './views/app/components/UI/create_post_form/create_post_form.component.html',
    controller: CreatePostFormController,
    controllerAs: 'vm',
    bindings: {}
}


