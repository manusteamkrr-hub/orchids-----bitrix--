"use client";

import React, { useMemo } from "react";
import Link from "next/link";
import { 
  Heart, Phone, ArrowRight, Search, BookOpen, 
  Brain, Users, ShieldAlert, Sparkles, Activity,
  Stethoscope, Clock, Zap, MessageSquare, Send, Mail,
  Menu
} from "lucide-react";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Input } from "@/components/ui/input";
import {
  Sheet,
  SheetContent,
  SheetHeader,
  SheetTitle,
  SheetTrigger,
} from "@/components/ui/sheet";
import { articles } from "@/lib/articles-data";
import { motion, AnimatePresence } from "framer-motion";

const categories = [
  { id: "all", label: "Все статьи", icon: <BookOpen className="w-4 h-4" /> },
  { id: "elderly", label: "Пожилым", icon: <Users className="w-4 h-4" /> },
  { id: "psychiatry", label: "Психиатрия", icon: <Brain className="w-4 h-4" /> },
  { id: "rehab", label: "Реабилитация", icon: <Activity className="w-4 h-4" /> },
  { id: "emergency", label: "Экстренная помощь", icon: <ShieldAlert className="w-4 h-4" /> },
];

export default function ArticlesIndexPage() {
  const [searchTerm, setSearchTerm] = React.useState("");
  const [activeCategory, setActiveCategory] = React.useState("all");

  const filteredArticles = useMemo(() => {
    return articles.filter((article) => {
      const matchesSearch = article.title.toLowerCase().includes(searchTerm.toLowerCase());
      const matchesCategory = activeCategory === "all" || article.category === activeCategory;
      return matchesSearch && matchesCategory;
    });
  }, [searchTerm, activeCategory]);

  const featuredArticle = filteredArticles[0];
  const remainingArticles = filteredArticles.slice(1);

  return (
    <div className="min-h-screen bg-[#fafafa] text-[#1a1a1a] selection:bg-primary/20">
      {/* Background Elements */}
      <div className="fixed inset-0 pointer-events-none overflow-hidden z-0">
        <div className="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-primary/5 rounded-full blur-[120px] animate-pulse" />
        <div className="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-blue-500/5 rounded-full blur-[120px] animate-pulse" style={{ animationDelay: "2s" }} />
      </div>

      {/* Header */}
      <header className="fixed top-0 z-50 w-full border-b bg-white/70 backdrop-blur-xl">
        <div className="container mx-auto flex h-20 items-center justify-between px-4 lg:px-8">
          <Link href="/" className="flex items-center gap-3 group transition-transform active:scale-95">
            <div className="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary text-primary-foreground shadow-lg shadow-primary/20 rotate-[-5deg] group-hover:rotate-0 transition-transform">
              <Heart className="h-7 w-7 fill-current" />
            </div>
            <div className="flex flex-col">
              <span className="text-2xl font-black tracking-tight text-primary leading-tight">Extramed-Psy</span>
              <span className="text-[11px] uppercase tracking-[0.2em] text-muted-foreground font-bold italic">Центр Заботы</span>
            </div>
          </Link>
          <nav className="hidden md:flex items-center gap-8 mr-auto ml-12">
            <Link href="/" className="text-sm font-bold text-muted-foreground hover:text-primary transition-colors">Главная</Link>
            <Link href="/articles" className="text-sm font-bold text-primary transition-colors relative after:absolute after:bottom-[-4px] after:left-0 after:w-full after:h-0.5 after:bg-primary">Статьи</Link>
          </nav>
          <div className="flex items-center gap-4">
            <Button size="lg" className="hidden sm:flex rounded-2xl font-bold px-6 shadow-xl shadow-primary/20 hover:scale-105 transition-all" asChild>
              <a href="tel:88612906619">
                <Phone className="mr-2 h-5 w-5" />
                8 (861) 290-66-19
              </a>
            </Button>

            <Sheet>
              <SheetTrigger asChild>
                <Button variant="ghost" size="icon" className="md:hidden">
                  <Menu className="h-6 w-6 text-primary" />
                </Button>
              </SheetTrigger>
              <SheetContent side="right" className="w-[300px]">
                <SheetHeader>
                  <SheetTitle className="text-left text-primary font-bold">Меню</SheetTitle>
                </SheetHeader>
                <nav className="mt-8 flex flex-col gap-4">
                  <Link href="/" className="text-lg font-medium hover:text-primary transition-colors py-3 border-b">Главная</Link>
                  <Link href="/articles" className="text-lg font-bold text-primary hover:text-primary/80 transition-colors py-3 border-b">Статьи</Link>
                  <div className="mt-4 pt-4">
                    <p className="text-sm text-muted-foreground mb-4">Свяжитесь с нами:</p>
                    <div className="flex flex-col gap-3">
                      <Button className="w-full justify-start bg-primary text-primary-foreground font-bold py-6" asChild>
                        <a href="tel:88612906619">
                          <Phone className="mr-2 h-5 w-5" />
                          8 (861) 290-66-19
                        </a>
                      </Button>
                      <Button variant="outline" className="w-full justify-start border-[#25D366] text-[#25D366] hover:bg-[#25D366] hover:text-white font-bold py-6" asChild>
                        <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer">
                          <MessageSquare className="mr-2 h-5 w-5" />
                          WhatsApp
                        </a>
                      </Button>
                      <Button variant="outline" className="w-full justify-start border-[#229ED9] text-[#229ED9] hover:bg-[#229ED9] hover:text-white font-bold py-6" asChild>
                        <a href="https://t.me/ExtraMed93" target="_blank" rel="noopener noreferrer">
                          <Send className="mr-2 h-5 w-5" />
                          Telegram
                        </a>
                      </Button>
                    </div>
                  </div>
                </nav>
              </SheetContent>
            </Sheet>
          </div>
        </div>
      </header>

      <main className="relative z-10 pt-32 pb-32">
        <div className="container mx-auto px-4 lg:px-8">
          {/* Hero Section */}
          <div className="max-w-4xl mx-auto text-center mb-20">
            <motion.div
              initial={{ opacity: 0, y: 30 }}
              animate={{ opacity: 1, y: 0 }}
              transition={{ duration: 0.8, ease: "easeOut" }}
            >
              <Badge className="mb-6 px-4 py-1.5 rounded-full bg-primary/10 text-primary border-none font-bold text-xs uppercase tracking-widest">
                <Sparkles className="w-3 h-3 mr-2 fill-current" /> База знаний
              </Badge>
              <h1 className="text-5xl md:text-7xl font-black text-[#0f172a] mb-8 leading-[1.1] tracking-tight">
                Полезные статьи <br /> 
                <span className="text-primary italic font-serif serif">от экспертов</span>
              </h1>
              <p className="text-xl text-slate-500 max-w-2xl mx-auto leading-relaxed mb-12">
                Информационные материалы о лечении, уходе и реабилитации, подготовленные ведущими специалистами пансионата Extramed-Psy.
              </p>
            </motion.div>

            {/* Search Bar */}
            <motion.div 
              initial={{ opacity: 0, scale: 0.95 }}
              animate={{ opacity: 1, scale: 1 }}
              transition={{ delay: 0.2, duration: 0.5 }}
              className="relative max-w-2xl mx-auto group"
            >
              <div className="absolute -inset-1 bg-gradient-to-r from-primary/20 to-blue-500/20 rounded-[2.5rem] blur opacity-25 group-hover:opacity-100 transition duration-1000 group-hover:duration-200" />
              <div className="relative flex items-center">
                <Search className="absolute left-6 text-slate-400 h-6 w-6 transition-colors group-focus-within:text-primary" />
                <Input
                  type="text"
                  placeholder="Найти тему (например: деменция, уход...)"
                  className="pl-16 h-16 rounded-[2rem] border-white bg-white/80 backdrop-blur-md focus-visible:ring-primary shadow-2xl text-lg font-medium placeholder:text-slate-400 border-none transition-all focus:scale-[1.02]"
                  value={searchTerm}
                  onChange={(e) => setSearchTerm(e.target.value)}
                />
              </div>
            </motion.div>
          </div>

          {/* Category Filters */}
          <div className="flex flex-wrap justify-center gap-3 mb-16">
            {categories.map((cat) => (
              <button
                key={cat.id}
                onClick={() => setActiveCategory(cat.id)}
                className={`flex items-center gap-2 px-6 py-3 rounded-2xl font-bold text-sm transition-all active:scale-95 ${
                  activeCategory === cat.id
                    ? "bg-primary text-white shadow-lg shadow-primary/30 ring-4 ring-primary/10"
                    : "bg-white text-slate-600 hover:bg-slate-50 shadow-md"
                }`}
              >
                {cat.icon}
                {cat.label}
              </button>
            ))}
          </div>

          <AnimatePresence mode="wait">
            <motion.div
              key={`${activeCategory}-${searchTerm}`}
              initial={{ opacity: 0, y: 20 }}
              animate={{ opacity: 1, y: 0 }}
              exit={{ opacity: 0, y: -20 }}
              transition={{ duration: 0.4 }}
            >
              {filteredArticles.length > 0 ? (
                <div className="space-y-12">
                  {/* Featured Article */}
                  {searchTerm === "" && featuredArticle && (
                    <motion.div
                      initial={{ opacity: 0, x: -20 }}
                      animate={{ opacity: 1, x: 0 }}
                      transition={{ delay: 0.1 }}
                    >
                      <Link href={`/articles/${featuredArticle.slug}`}>
                        <div className="group relative overflow-hidden rounded-[2.5rem] bg-white shadow-2xl flex flex-col lg:flex-row min-h-[450px] border border-slate-100 hover:border-primary/20 transition-all active:scale-[0.99]">
                          <div className="lg:w-1/2 p-12 flex flex-col justify-center gap-6 relative">
                            <div className="flex items-center gap-3 text-primary">
                              <Badge className="bg-primary text-white px-4 py-1 rounded-lg">Популярное</Badge>
                              <span className="text-sm font-bold flex items-center gap-1 opacity-70">
                                <Clock className="w-4 h-4" /> 5 мин чтения
                              </span>
                            </div>
                            <h2 className="text-3xl md:text-4xl font-black text-slate-900 group-hover:text-primary transition-colors leading-tight">
                              {featuredArticle.title}
                            </h2>
                            <p className="text-slate-500 text-lg line-clamp-3 leading-relaxed">
                              {featuredArticle.excerpt}
                            </p>
                            <div className="flex items-center gap-2 text-primary font-black uppercase tracking-widest text-sm mt-4">
                              Читать материал <ArrowRight className="w-5 h-5 group-hover:translate-x-2 transition-transform" />
                            </div>
                          </div>
                          <div className="lg:w-1/2 relative overflow-hidden min-h-[300px] lg:min-h-full">
                            <img 
                              src={featuredArticle.image} 
                              alt={featuredArticle.title}
                              className="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                            />
                            <div className="absolute inset-0 bg-gradient-to-l from-transparent via-transparent to-white/10 lg:to-white/20" />
                          </div>
                        </div>
                      </Link>
                    </motion.div>
                  )}

                  {/* Articles Grid */}
                  <div className="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    {(searchTerm !== "" ? filteredArticles : remainingArticles).map((article, i) => (
                      <motion.div
                        key={article.slug}
                        initial={{ opacity: 0, scale: 0.9 }}
                        animate={{ opacity: 1, scale: 1 }}
                        transition={{ duration: 0.4, delay: i * 0.05 }}
                      >
                        <Link href={`/articles/${article.slug}`}>
                          <Card className="h-full flex flex-col hover:shadow-[0_20px_50px_-15px_rgba(0,0,0,0.1)] transition-all border border-slate-100 rounded-[2rem] bg-white group cursor-pointer overflow-hidden active:scale-95">
                            <div className="aspect-[16/10] relative overflow-hidden">
                              <img 
                                src={article.image} 
                                alt={article.title}
                                className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                              />
                              <div className="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors" />
                              <div className="absolute top-6 left-6">
                                <Badge className="bg-white/90 backdrop-blur-sm text-primary font-bold shadow-sm border-none px-3 py-1 rounded-xl">
                                  {categories.find(c => c.id === article.category)?.label || "Статья"}
                                </Badge>
                              </div>
                            </div>
                            <CardHeader className="pt-8 px-8">
                              <CardTitle className="text-xl font-bold text-slate-900 group-hover:text-primary leading-tight transition-colors line-clamp-2">
                                {article.title}
                              </CardTitle>
                            </CardHeader>
                            <CardContent className="flex-grow flex flex-col justify-between px-8 pb-8">
                              <p className="text-slate-500 text-sm line-clamp-3 mb-8 leading-relaxed">
                                {article.excerpt}
                              </p>
                              <div className="flex items-center justify-between">
                                <span className="text-xs font-bold text-slate-400 flex items-center gap-1 uppercase tracking-widest">
                                  <Clock className="w-3 h-3" /> 4 мин
                                </span>
                                <div className="h-10 w-10 rounded-full bg-slate-50 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all shadow-sm">
                                  <ArrowRight className="h-5 w-5" />
                                </div>
                              </div>
                            </CardContent>
                          </Card>
                        </Link>
                      </motion.div>
                    ))}
                  </div>
                </div>
              ) : (
                <div className="text-center py-32">
                  <div className="w-24 h-24 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-6 text-slate-300">
                    <Search className="w-12 h-12" />
                  </div>
                  <h3 className="text-2xl font-black text-slate-900 mb-2">Ничего не найдено</h3>
                  <p className="text-slate-500 mb-8">Попробуйте изменить запрос или категорию</p>
                  <Button variant="outline" className="rounded-2xl px-8" onClick={() => { setSearchTerm(""); setActiveCategory("all"); }}>
                    Сбросить все фильтры
                  </Button>
                </div>
              )}
            </motion.div>
          </AnimatePresence>
        </div>
      </main>

      <footer className="border-t py-24 bg-white relative z-10">
        <div className="container mx-auto px-4 lg:px-8">
          <div className="grid md:grid-cols-3 gap-12 items-center text-center md:text-left">
            <div className="space-y-6">
              <Link href="/" className="flex items-center gap-3 justify-center md:justify-start">
                <div className="flex h-10 w-10 items-center justify-center rounded-xl bg-primary text-primary-foreground shadow-lg shadow-primary/20">
                  <Heart className="h-6 w-6 fill-current" />
                </div>
                <span className="text-xl font-black text-primary">Extramed-Psy</span>
              </Link>
              <p className="text-slate-500 text-sm max-w-xs mx-auto md:mx-0 leading-relaxed">
                Профессиональная медицинская помощь и заботливый уход за вашими близкими в Краснодаре.
              </p>
            </div>
            <div className="flex flex-col gap-4 items-center">
              <h4 className="font-bold text-slate-900 uppercase tracking-widest text-xs mb-2">Навигация</h4>
              <Link href="/" className="text-sm font-bold text-slate-500 hover:text-primary transition-colors">Главная</Link>
              <Link href="/articles" className="text-sm font-bold text-slate-500 hover:text-primary transition-colors">Все статьи</Link>
              <Link href="/#pricing" className="text-sm font-bold text-slate-500 hover:text-primary transition-colors">Цены</Link>
            </div>
            <div className="space-y-6 text-center md:text-right">
              <h4 className="font-bold text-slate-900 uppercase tracking-widest text-xs mb-2">Контакты</h4>
              <div className="flex flex-col gap-3">
                <a href="tel:88612906619" className="text-2xl font-black text-primary hover:opacity-80 transition-opacity tracking-tight">8 (861) 290-66-19</a>
                <p className="text-xs font-bold text-slate-400 uppercase tracking-widest">Телефон клиники</p>
              </div>
              
              <div className="pt-4 space-y-4">
                <div className="flex flex-col gap-1">
                  <a href="https://wa.me/79282579115" target="_blank" rel="noopener noreferrer" className="text-lg font-bold text-slate-700 hover:text-primary transition-colors flex items-center justify-center md:justify-end gap-2">
                    <MessageSquare className="w-5 h-5 text-[#25D366]" /> +7 (928) 257-91-15
                  </a>
                  <p className="text-[10px] font-bold text-slate-400 uppercase tracking-widest">WhatsApp консультации</p>
                </div>

                <div className="flex flex-col gap-1">
                  <a href="https://t.me/ExtraMed93" target="_blank" rel="noopener noreferrer" className="text-lg font-bold text-slate-700 hover:text-primary transition-colors flex items-center justify-center md:justify-end gap-2">
                    <Send className="w-5 h-5 text-[#229ED9]" /> @ExtraMed93
                  </a>
                  <p className="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Telegram канал</p>
                </div>

                <div className="flex flex-col gap-1">
                  <a href="mailto:alexsamara134@yandex.ru" className="text-sm font-bold text-slate-700 hover:text-primary transition-colors flex items-center justify-center md:justify-end gap-2">
                    <Mail className="w-4 h-4 text-primary" /> alexsamara134@yandex.ru
                  </a>
                  <p className="text-[10px] font-bold text-slate-400 uppercase tracking-widest">Электронная почта</p>
                </div>
              </div>
            </div>
          </div>
          <div className="mt-20 pt-8 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center gap-4">
            <p className="text-slate-400 text-xs font-medium">
              © 2024 Extramed-Psy. Все права защищены.
            </p>
            <div className="flex gap-6">
              <Link href="#" className="text-slate-400 hover:text-primary transition-colors"><Users className="w-5 h-5" /></Link>
              <Link href="#" className="text-slate-400 hover:text-primary transition-colors"><Activity className="w-5 h-5" /></Link>
              <Link href="#" className="text-slate-400 hover:text-primary transition-colors"><ShieldAlert className="w-5 h-5" /></Link>
            </div>
          </div>
        </div>
      </footer>
    </div>
  );
}
