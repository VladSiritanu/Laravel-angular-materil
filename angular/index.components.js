import {CreatePostFormComponent} from './app/components/create_post_form/create_post_form.component';
import {ListPostsComponent} from './app/components/list_posts/list_posts.component';
angular.module('app.components')
    .component('createPostForm', CreatePostFormComponent)
    .component('listPosts', ListPostsComponent);
