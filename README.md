  <H1>Adsoldiers System</H1>
   <p>Adsoldiers System implemented by ADR architecture Pattern</p>
   <h2>Action Domain Responding (ADR)</h2>
   <blockquote>
    ADR groups the functionality of applications into actions. 
    Actions execute any business logic for that action, before passing the result to a responder where it is presented as a view.

    As first glance, it seems similar to MVC but it provides a more clear separation of concerns, and there’s no argument as to what goes where. 
    For example, in an MVC application, where do you set response headers? The controller? A view class? 
    There’s no definitive answer whereas with ADR there is: the responder class. Giving the similarities, it’s also easy to convert an existing MVC application to follow the ADR pattern.
   </blockquote>
<h3>Structure</h3>
<ul>
    <li>/app
        <ul>
            <li>Blog
                <ul>
                    <li>Actions</li>
                    <ul>
                        <li>ListPostsAction.php</li>
                        <li>ViewPostAction.php</li>
                    </ul>
                    <li>Domain
                        <ul>
                            <li>Collections
                                <ul>
                                    <li>PostCollection.php</li>

                                </ul>
                            </li>
                            <li>\Models
                                <ul>
                                    <li>Post.php</li>
                                </ul>
                            </li>
                            <li>\services
                                <ul>
                                    <li>PostServices.php</li>
                                </ul>
                            </li>
                            <li>/Repositories
                                <ul>
                                    <li>
                                        PostRepository.php
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>Responders
                        <ul>
                            <li>
                                ListPostsResponder.php
                            </li>
                           
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>
