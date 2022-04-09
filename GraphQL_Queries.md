```graphql
query {
    ads {
        data {
            id
            sku
            title
            description
            location
            price
            published_at
            attributes {
                color
                negotiable
                warranty
                condition
                status
                boost
                gear
                country_import
                engine_power
            }
            features {
                data {
                    sort
                    featureable_id
                    featureable_type
                    type
                }
            }
            taxonomyContents {
                data {
                    title
                }
            }
            user {
                name
            }
        }
    }
}

```
