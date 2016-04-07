class ListPostsController{
    constructor(API,ToastService){
        'ngInject';
        this.API = API;
        this.ToastService = ToastService;
        this.getPosts();
    }

    getPosts(){

        this.API.all('postsShow').post().then((response) => {
        this.posts = response.data.posts;
    });
    }

    delete(id){
        var data = {
            id: id
        };

        this.API.all('postsDelete').post(data).then((response) => {
        this.ToastService.show('Post "'+response.data.post.name+'" deleted successfully');
        this.getPosts();
    });
    }


}

export const ListPostsComponent = {
    templateUrl: './views/app/components/UI/list_posts/list_posts.component.html',
    controller: ListPostsController,
    controllerAs: 'vm',
    bindings: {}
}


