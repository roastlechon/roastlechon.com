import React from "react";

import {
  SEO,
  Layout,
} from "@roastlechon/gatsby-theme-succulent/src/components";

export default function PageNotFound() {
  return (
    <Layout>
      <SEO />
      <div>
        <h2>Woops, the page you're looking for could not be found</h2>
      </div>
    </Layout>
  );
}
