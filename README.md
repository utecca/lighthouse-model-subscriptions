# Lighthouse Model Subscriptions

This library provides an easy solutions for broadcasting generic model
changes via Lighthouse GraphQL subscriptions.

## Example

In order to make a model subscribable, simply apply the `@subscribable` directive.
This will add a new subscription field for the given model.

```graphql
type Post @subscribable {
    id: ID!
    title: String!
}
```

This will result in the following automatically being added to your schema.
```graphql
enum EventType {
    CREATED
    UPDATED
    DELETED
}

type PostEvent {
    id: ID!
    model: Post
    event: EventType!
}

type Subscription {
    "Subscribe to changes to Posts."
    postModified(
        "If not filled, all event-types will be subscribed to."
        events: [EventType],
        
        "If filled, only the model with this ID will be subscribed to."
        id: ID
    ): PostEvent
}
```


