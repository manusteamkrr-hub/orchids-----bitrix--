"use client";

import React from "react";
import Link from "next/link";
import { Heart, Phone, ArrowRight, Search, BookOpen } from "lucide-react";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Input } from "@/components/ui/input";
import { articles } from "@/lib/articles-data";
import { motion } from "framer-motion";

export default function ArticlesIndexPage() {
  const [searchTerm, setSearchTerm] = React.useState("");

  const filteredArticles = articles.filter((article) =>
    article.title.toLowerCase().includes(searchTerm.toLowerCase())
  );

  return (
    <div className="min-h-screen bg-background">
      {/* Header */}
      <header className="fixed top-0 z-50 w-full border-b bg-background/80 backdrop-blur-md">
        <div className="container mx-auto flex h-16 items-center justify-between px-4">
          <Link href="/" className="flex items-center gap-2">
            <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-primary-foreground">
              <Heart className="h-6 w-6" />
            </div>
            <div className="flex flex-col">
              <span className="text-xl font-bold tracking-tight text-primary leading-none">Extramed-Psy</span>
              <span className="text-[10px] uppercase tracking-wider text-muted-foreground font-medium">Краснодар</span>
            </div>
          </Link>
          <div className="flex items-center gap-4">
            <Link href="/" className="text-sm font-medium hover:text-primary hidden md:block">Главная</Link>
            <Button variant="outline" className="hidden sm:flex border-primary text-primary hover:bg-primary hover:text-primary-foreground font-semibold">
              <Phone className="mr-2 h-4 w-4" />
              +7 (861) 000-00-00
            </Button>
          </div>
        </div>
      </header>

      <main className="pt-24 pb-20">
        <div className="container mx-auto px-4">
          <div className="text-center mb-16">
            <motion.div
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.5 }}
            >
              <h1 className="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-primary mb-6">
                Полезные статьи и материалы
              </h1>
              <p className="text-xl text-muted-foreground max-w-2xl mx-auto">
                Информационные материалы о лечении, уходе и реабилитации от специалистов пансионата Extramed-Psy.
              </p>
            </motion.div>
          </div>

          {/* Search Bar */}
          <div className="max-w-2xl mx-auto mb-12 relative">
            <Search className="absolute left-4 top-1/2 -translate-y-1/2 text-muted-foreground h-5 w-5" />
            <Input
              type="text"
              placeholder="Поиск по статьям..."
              className="pl-12 h-14 rounded-full border-primary/20 focus-visible:ring-primary shadow-lg"
              value={searchTerm}
              onChange={(e) => setSearchTerm(e.target.value)}
            />
          </div>

          <div className="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            {filteredArticles.map((article, i) => (
              <motion.div
                key={article.slug}
                initial={{ opacity: 0, y: 20 }}
                animate={{ opacity: 1, y: 0 }}
                transition={{ duration: 0.5, delay: i * 0.05 }}
              >
                <Link href={`/articles/${article.slug}`}>
                  <Card className="h-full flex flex-col hover:shadow-2xl transition-all border-none shadow-xl group cursor-pointer overflow-hidden">
                    <div className="h-3 bg-primary group-hover:h-5 transition-all" />
                    <CardHeader>
                      <Badge className="w-fit mb-2 bg-primary/10 text-primary group-hover:bg-primary group-hover:text-primary-foreground transition-colors">
                        <BookOpen className="h-3 w-3 mr-1" /> Статья
                      </Badge>
                      <CardTitle className="text-xl font-bold text-primary group-hover:text-primary/80 leading-tight">
                        {article.title}
                      </CardTitle>
                    </CardHeader>
                    <CardContent className="flex-grow flex flex-col justify-between">
                      <p className="text-muted-foreground text-sm line-clamp-3 mb-6">
                        {article.excerpt}
                      </p>
                      <div className="flex items-center text-primary font-bold text-sm group-hover:gap-2 transition-all">
                        Читать полностью <ArrowRight className="ml-1 h-4 w-4" />
                      </div>
                    </CardContent>
                  </Card>
                </Link>
              </motion.div>
            ))}
          </div>

          {filteredArticles.length === 0 && (
            <div className="text-center py-20">
              <p className="text-xl text-muted-foreground">Статьи не найдены по вашему запросу.</p>
              <Button variant="ghost" className="mt-4" onClick={() => setSearchTerm("")}>Сбросить поиск</Button>
            </div>
          )}
        </div>
      </main>

      <footer className="border-t py-16 bg-secondary/20">
        <div className="container mx-auto px-4 text-center">
          <div className="flex justify-center items-center gap-2 mb-8">
            <Heart className="h-6 w-6 text-primary" />
            <span className="text-xl font-bold text-primary">Extramed-Psy</span>
          </div>
          <p className="text-muted-foreground text-sm max-w-md mx-auto">
            © 2024 Extramed-Psy. Профессиональный уход и забота о ваших близких в Краснодаре.
          </p>
        </div>
      </footer>
    </div>
  );
}
