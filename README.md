 <H1>ADR(Action Domain Responders)</H1>
  <p>Action Domain Responder organizes a single user
   interface interaction between an HTTP client and a HTTP server-side application into three distinct roles.</p>
  <h2>Components ADR</h2>
  <p>Action is the logic to connect the Domain and Responder. It invokes the Domain with inputs collected from the HTTP Request, then invokes the Responder with the data needed to build an HTTP Response.

    Domain is an entry point to the domain logic forming the core of the application. It may be a Transaction Script, Service Layer, Application Service, or something similar.
    
    Responder is the presentation logic to build an HTTP Response using data it receives from the Action. It deals with status codes, headers and cookies, content, formatting and transformation, templates and views, and so on.
    
    </p>
    <h3>PROCESS ADR</h3> 
    <ul>
      <li>
        The web handler receives an HTTP Request and dispatches it to an Action.
      </li>
      <li>
        The Action invokes the Domain, collecting any required inputs to the Domain from the HTTP Request.
      </li>
      <li>
        The Action then invokes the Responder with the data it needs to build an HTTP Response.
      </li>
      <li>
        The Responder builds an HTTP Response using the data fed to it by the Action.
      </li>
      <li>
        The Action returns the HTTP Response to the web handler sends the HTTP Response.
      </li>
    </ul>
  <h3>Structure</h3>
  <ul>
      <li>/app
          <ul>
              <li>Blog
                  <ul>
                      <li>Actions
                          <ul>
                              <li>ListPostsAction.php</li>
                          </ul>
                      </li>
                      <li>Domain
                          <ul>
                              <li>Services
                                  <ul>
                                      <li>PostServices.php</li>
                                  </ul>
                              </li>
                              <li>Models
                                  <ul>
                                      <li>Post.php</li>
                                  </ul>
                              </li>
                              <li>Repositories
                                  <ul>
                                      <li>PostRepository.php</li>
                                  </ul>
                              </li>
                          </ul>
                      </li> 
                      <li>Responders
                          <ul>
                              <li>ListPostResponders.php</li>
                          </ul>
                      </li> 
                  </ul>
              </li>
          </ul>
      </li>
  </ul>
