import { graphql } from "gatsby";
import { Posts as PostsPage } from "@roastlechon/gatsby-theme-succulent/src/components";

export default PostsPage;

export const query = graphql`
  query ArchiveQuery {
    allBlogPost(sort: { fields: [date, title], order: DESC }, limit: 1000) {
      edges {
        node {
          id
          slug
          title
          date(formatString: "DD MMM YYYY")
          excerpt
          tags
        }
      }
    }
  }
`;
