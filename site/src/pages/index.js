import React from "react";

import {
  SEO,
  Layout,
} from "@roastlechon/gatsby-theme-succulent/src/components";
import Intro from "../components/intro";
import BlogList from "../components/blog-list";
import Projects from "../components/projects";

export default function IndexPage() {
  return (
    <Layout>
      <SEO title="Home" />
      <Intro />
      <BlogList />
      <Projects />
    </Layout>
  );
}
