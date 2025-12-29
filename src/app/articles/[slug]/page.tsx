import React from "react";
import { articles } from "@/lib/articles-data";
import ArticleClient from "./ArticleClient";

export function generateStaticParams() {
  return articles.map((article) => ({
    slug: article.slug,
  }));
}

export default async function Page({ params }: { params: Promise<{ slug: string }> }) {
  const { slug } = await params;
  return <ArticleClient slug={slug} />;
}
