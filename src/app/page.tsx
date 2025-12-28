"use client";

import React from "react";
import Image from "next/image";
import { 
  Heart, 
  Activity, 
  ShieldCheck, 
  MessageSquare, 
  Clock, 
  Phone, 
  ChevronRight, 
  Star, 
  CheckCircle2, 
  Users,
  Ambulance,
  Stethoscope,
  Brain,
  Bone,
  FlameKindling
} from "lucide-react";
import { motion } from "framer-motion";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { 
  Table, 
  TableBody, 
  TableCell, 
  TableHead, 
  TableHeader, 
  TableRow 
} from "@/components/ui/table";

const fadeIn = {
  initial: { opacity: 0, y: 20 },
  animate: { opacity: 1, y: 0 },
  transition: { duration: 0.6 }
};

const stagger = {
  animate: {
    transition: {
      staggerChildren: 0.1
    }
  }
};

export default function LandingPage() {
  return (
    <div className="min-h-screen bg-background text-foreground selection:bg-primary selection:text-primary-foreground">
      {/* Navigation */}
      <header className="fixed top-0 z-50 w-full border-b bg-background/80 backdrop-blur-md">
        <div className="container mx-auto flex h-16 items-center justify-between px-4">
          <div className="flex items-center gap-2">
            <div className="flex h-10 w-10 items-center justify-center rounded-lg bg-primary text-primary-foreground">
              <Heart className="h-6 w-6" />
            </div>
            <span className="text-xl font-bold tracking-tight text-primary">Extramed-Psy</span>
          </div>
          <nav className="hidden md:flex items-center gap-6">
            <a href="#services" className="text-sm font-medium hover:text-primary transition-colors">Услуги</a>
            <a href="#approach" className="text-sm font-medium hover:text-primary transition-colors">Подход</a>
            <a href="#prices" className="text-sm font-medium hover:text-primary transition-colors">Цены</a>
            <a href="#reviews" className="text-sm font-medium hover:text-primary transition-colors">Отзывы</a>
          </nav>
          <Button variant="outline" className="hidden sm:flex border-primary text-primary hover:bg-primary hover:text-primary-foreground">
            <Phone className="mr-2 h-4 w-4" />
            +7 (861) 000-00-00
          </Button>
        </div>
      </header>

      <main className="pt-16">
        {/* Hero Section */}
        <section className="relative overflow-hidden py-20 lg:py-32">
          <div className="container mx-auto px-4">
            <div className="grid gap-12 lg:grid-cols-2 lg:items-center">
              <motion.div 
                initial="initial"
                animate="animate"
                variants={stagger}
                className="flex flex-col gap-6 text-center lg:text-left"
              >
                <motion.div variants={fadeIn}>
                  <Badge variant="secondary" className="mb-4 bg-primary/10 text-primary px-3 py-1">г. Краснодар, ул. Лизы Чайкиной</Badge>
                  <h1 className="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl text-primary">
                    Пансионат для пожилых: профессиональный уход и безопасность
                  </h1>
                </motion.div>
                <motion.p variants={fadeIn} className="text-lg text-muted-foreground max-w-2xl mx-auto lg:mx-0">
                  Ваш близкий в надежных руках. Мы не просто обеспечиваем проживание — мы возвращаем качество жизни, спокойствие для семьи и профессиональную помощь при самых сложных диагнозах.
                </motion.p>
                <motion.div variants={fadeIn} className="flex flex-wrap justify-center lg:justify-start gap-4">
                  <Button size="lg" className="rounded-full px-8 bg-primary hover:bg-primary/90 text-primary-foreground shadow-lg shadow-primary/20">
                    Получить консультацию врача
                  </Button>
                  <Button size="lg" variant="outline" className="rounded-full px-8 border-primary text-primary hover:bg-primary/5">
                    Записаться на онлайн-экскурсию
                  </Button>
                </motion.div>
              </motion.div>
              <motion.div 
                initial={{ opacity: 0, scale: 0.8 }}
                animate={{ opacity: 1, scale: 1 }}
                transition={{ duration: 0.8 }}
                className="relative aspect-video lg:aspect-square rounded-3xl overflow-hidden shadow-2xl"
              >
                <Image 
                  src="https://images.unsplash.com/photo-1581578731522-745d0514227e?auto=format&fit=crop&q=80" 
                  alt="Nursing Home"
                  fill
                  className="object-cover"
                  priority
                />
                <div className="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent" />
              </motion.div>
            </div>
          </div>
          <div className="absolute -z-10 top-0 right-0 w-1/3 h-1/3 bg-primary/5 blur-3xl rounded-full translate-x-1/2 -translate-y-1/2" />
        </section>

        {/* Conditions Section */}
        <section id="services" className="bg-secondary/30 py-24">
          <div className="container mx-auto px-4">
            <div className="mb-16 text-center">
              <h2 className="mb-4 text-3xl font-bold tracking-tight text-primary sm:text-4xl">
                Специализируемся на сложных возрастных заболеваниях
              </h2>
              <p className="mx-auto max-w-3xl text-lg text-muted-foreground">
                Мы глубоко понимаем специфику заболеваний, которые требуют не просто ухода, а особых знаний и терпения.
              </p>
            </div>

            <div className="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
              <Card className="border-none shadow-xl bg-card transition-all hover:-translate-y-1">
                <CardHeader>
                  <div className="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                    <Brain className="h-6 w-6" />
                  </div>
                  <CardTitle>Неврологические заболевания</CardTitle>
                </CardHeader>
                <CardContent className="space-y-2">
                  <ul className="space-y-2 text-muted-foreground">
                    <li className="flex items-center gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary" /> Деменция и болезнь Альцгеймера</li>
                    <li className="flex items-center gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary" /> Болезнь Паркинсона</li>
                    <li className="flex items-center gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary" /> Рассеянный склероз</li>
                    <li className="flex items-center gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary" /> Последствия инсульта</li>
                  </ul>
                </CardContent>
              </Card>

              <Card className="border-none shadow-xl bg-card transition-all hover:-translate-y-1">
                <CardHeader>
                  <div className="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                    <Activity className="h-6 w-6" />
                  </div>
                  <CardTitle>Реабилитация</CardTitle>
                </CardHeader>
                <CardContent className="space-y-2">
                  <ul className="space-y-2 text-muted-foreground">
                    <li className="flex items-center gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary" /> Реабилитация после инфаркта</li>
                    <li className="flex items-center gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary" /> Восстановление после переломов</li>
                    <li className="flex items-center gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary" /> Уход за лежачими больными</li>
                    <li className="flex items-center gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary" /> Постоперационная реабилитация</li>
                  </ul>
                </CardContent>
              </Card>

              <Card className="border-none shadow-xl bg-card transition-all hover:-translate-y-1">
                <CardHeader>
                  <div className="mb-4 flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary">
                    <Stethoscope className="h-6 w-6" />
                  </div>
                  <CardTitle>Хронические заболевания</CardTitle>
                </CardHeader>
                <CardContent className="space-y-2">
                  <ul className="space-y-2 text-muted-foreground">
                    <li className="flex items-center gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary" /> Сахарный диабет</li>
                    <li className="flex items-center gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary" /> Гипертония и сердечная недостаточность</li>
                    <li className="flex items-center gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary" /> Онкология (паллиативный уход)</li>
                    <li className="flex items-center gap-2 text-sm"><CheckCircle2 className="h-4 w-4 text-primary" /> Артрит и артроз</li>
                  </ul>
                </CardContent>
              </Card>
            </div>

            <div className="mt-12 rounded-3xl bg-primary p-8 text-center text-primary-foreground">
              <p className="mb-6 text-lg font-medium">Ваш случай не в списке? Наши врачи специализируются на комплексных решениях.</p>
              <Button size="lg" variant="secondary" className="rounded-full text-primary hover:bg-white transition-colors">
                Проконсультироваться с гериатром бесплатно
              </Button>
            </div>
          </div>
        </section>

        {/* Approach Section */}
        <section id="approach" className="py-24">
          <div className="container mx-auto px-4">
            <div className="mb-16 text-center">
              <h2 className="mb-4 text-3xl font-bold tracking-tight text-primary sm:text-4xl">
                Забота, которая охватывает все аспекты жизни
              </h2>
              <p className="mx-auto max-w-3xl text-lg text-muted-foreground">
                Мы заменили разрозненные услуги единой системой care, где медицинская помощь неотделима от человеческого тепла.
              </p>
            </div>

            <div className="grid gap-12 lg:grid-cols-3">
              <div className="flex flex-col gap-4">
                <div className="h-1 bg-primary/20 w-full mb-4 overflow-hidden rounded-full">
                  <div className="h-full bg-primary w-1/3" />
                </div>
                <h3 className="text-xl font-bold text-primary">Медицинский уход 24/7</h3>
                <ul className="space-y-3 text-muted-foreground">
                  <li className="flex items-start gap-3">
                    <div className="mt-1 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span>Контроль здоровья: давление, сахар, прием препаратов.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="mt-1 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span>Профилактика и лечение пролежней.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="mt-1 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span>Квалифицированные сиделки с мед. образованием.</span>
                  </li>
                </ul>
              </div>

              <div className="flex flex-col gap-4">
                <div className="h-1 bg-primary/20 w-full mb-4 overflow-hidden rounded-full">
                  <div className="h-full bg-primary w-2/3" />
                </div>
                <h3 className="text-xl font-bold text-primary">Активная реабилитация</h3>
                <ul className="space-y-3 text-muted-foreground">
                  <li className="flex items-start gap-3">
                    <div className="mt-1 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span>Индивидуальные занятия ЛФК и гимнастикой.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="mt-1 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span>Восстановительный и оздоровительный массаж.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="mt-1 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span>Занятия по поддержанию когнитивных функций.</span>
                  </li>
                </ul>
              </div>

              <div className="flex flex-col gap-4">
                <div className="h-1 bg-primary/20 w-full mb-4 overflow-hidden rounded-full">
                  <div className="h-full bg-primary w-full" />
                </div>
                <h3 className="text-xl font-bold text-primary">Безопасность и жизнь</h3>
                <ul className="space-y-3 text-muted-foreground">
                  <li className="flex items-start gap-3">
                    <div className="mt-1 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span>Специализированное питание по назначению врача.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="mt-1 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span>Организованный досуг и социализация.</span>
                  </li>
                  <li className="flex items-start gap-3">
                    <div className="mt-1 rounded-full bg-primary/10 p-1 text-primary"><CheckCircle2 className="h-3 w-3" /></div>
                    <span>Психологическая поддержка для семей.</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>

        {/* Pricing Table */}
        <section id="prices" className="bg-secondary/30 py-24">
          <div className="container mx-auto px-4">
            <h2 className="mb-12 text-3xl font-bold tracking-tight text-primary text-center">Стоимость услуг</h2>
            <div className="overflow-hidden rounded-3xl border bg-card shadow-lg">
              <Table>
                <TableHeader className="bg-primary/5">
                  <TableRow>
                    <TableHead className="py-6 px-8 text-lg font-bold">Наименование услуги</TableHead>
                    <TableHead className="py-6 px-8 text-right text-lg font-bold">Стоимость</TableHead>
                  </TableRow>
                </TableHeader>
                <TableBody>
                  <TableRow>
                    <TableCell className="py-4 px-8 font-medium">Первичная консультация по телефону</TableCell>
                    <TableCell className="py-4 px-8 text-right text-primary font-bold">бесплатно</TableCell>
                  </TableRow>
                  <TableRow>
                    <TableCell className="py-4 px-8 font-medium">Размещение в пансионате</TableCell>
                    <TableCell className="py-4 px-8 text-right text-primary font-bold">от 1750 ₽ / сут</TableCell>
                  </TableRow>
                  <TableRow>
                    <TableCell className="py-4 px-8 font-medium">Реабилитация</TableCell>
                    <TableCell className="py-4 px-8 text-right text-primary font-bold">от 2000 ₽ / сут</TableCell>
                  </TableRow>
                  <TableRow>
                    <TableCell className="py-4 px-8 font-medium">Вызов специалиста (Психиатр, Терапевт, Невролог) на дом</TableCell>
                    <TableCell className="py-4 px-8 text-right text-primary font-bold">от 3000 ₽</TableCell>
                  </TableRow>
                  <TableRow>
                    <TableCell className="py-4 px-8 font-medium">Перевозка больных в пансионат</TableCell>
                    <TableCell className="py-4 px-8 text-right text-primary font-bold">от 2000 ₽</TableCell>
                  </TableRow>
                </TableBody>
              </Table>
            </div>
          </div>
        </section>

        {/* Why Us Section */}
        <section className="py-24">
          <div className="container mx-auto px-4">
            <h2 className="mb-16 text-3xl font-bold tracking-tight text-primary text-center sm:text-4xl">
              Спокойствие вашей семьи — наш главный приоритет
            </h2>
            <div className="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
              {[
                {
                  icon: <ShieldCheck className="h-6 w-6" />,
                  title: "Безопасность 24/7",
                  text: "Видеонаблюдение, тревожные кнопки, дежурная медсестра у постели больного."
                },
                {
                  icon: <MessageSquare className="h-6 w-6" />,
                  title: "Полная прозрачность",
                  text: "Ежедневные отчеты в мессенджере (фото, видео). Открытые двери для посещений."
                },
                {
                  icon: <Users className="h-6 w-6" />,
                  title: "Команда экспертов",
                  text: "Врачи-гериатры, неврологи, реабилитологи, психологи работают как единая команда."
                },
                {
                  icon: <CheckCircle2 className="h-6 w-6" />,
                  title: "Медицинская лицензия",
                  text: "Деятельность официально лицензирована. Гарантия качества и законности услуг."
                }
              ].map((item, i) => (
                <div key={i} className="flex flex-col gap-4 text-center items-center">
                  <div className="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary text-primary-foreground shadow-lg shadow-primary/20">
                    {item.icon}
                  </div>
                  <h3 className="text-xl font-bold text-primary">{item.title}</h3>
                  <p className="text-sm text-muted-foreground">{item.text}</p>
                </div>
              ))}
            </div>
          </div>
        </section>

        {/* Reviews Section */}
        <section id="reviews" className="bg-primary/5 py-24">
          <div className="container mx-auto px-4">
            <h2 className="mb-16 text-3xl font-bold tracking-tight text-primary text-center sm:text-4xl">
              Истории семей, которые обрели спокойствие
            </h2>
            <div className="mx-auto max-w-4xl">
              <Card className="border-none shadow-2xl p-8 md:p-12 bg-white relative">
                <div className="absolute top-0 left-0 translate-x-8 -translate-y-4 text-primary opacity-20">
                  <Star className="h-16 w-16 fill-current" />
                </div>
                <blockquote className="relative z-10 space-y-6">
                  <div className="flex gap-1 text-primary">
                    {[1, 2, 3, 4, 5].map((s) => <Star key={s} className="h-5 w-5 fill-current" />)}
                  </div>
                  <p className="text-xl italic leading-relaxed text-foreground">
                    «После того как у отца диагностировали болезнь Паркинсона, мы не справлялись. В Extramed-Psy к нему вернулся интерес к жизни. С ним занимается инструктор ЛФК и психолог. Мы видим, как он тянется к общению. Спасибо за ваш труд и понимание!»
                  </p>
                  <footer className="flex items-center gap-4">
                    <div className="h-12 w-12 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold">СИ</div>
                    <div>
                      <div className="font-bold">Семья Ивановых</div>
                      <div className="text-sm text-muted-foreground">г. Краснодар</div>
                    </div>
                  </footer>
                </blockquote>
              </Card>
            </div>
          </div>
        </section>

        {/* Steps Section */}
        <section className="py-24">
          <div className="container mx-auto px-4">
            <h2 className="mb-16 text-3xl font-bold tracking-tight text-primary text-center sm:text-4xl">
              Всего 3 шага до уверенности в завтрашнем дне
            </h2>
            <div className="grid gap-12 lg:grid-cols-3 relative">
              <div className="hidden lg:block absolute top-12 left-1/4 right-1/4 h-0.5 bg-primary/10" />
              {[
                { step: "01", title: "Знакомство и диагностика", text: "Вы звоните или оставляете заявку. Наш врач бесплатно консультирует и оценивает состояние." },
                { step: "02", title: "Подбор программы", text: "Мы подбираем индивидуальную программу ухода и приглашаем на онлайн-экскурсию по пансионату." },
                { step: "03", title: "Комфортное заселение", text: "Помогаем с организацией безопасной перевозки и адаптацией нового резидента." }
              ].map((step, i) => (
                <div key={i} className="flex flex-col items-center text-center gap-6 relative z-10 bg-background lg:px-4">
                  <div className="h-16 w-16 rounded-full bg-primary flex items-center justify-center text-xl font-bold text-primary-foreground shadow-xl shadow-primary/20">
                    {step.step}
                  </div>
                  <h3 className="text-xl font-bold text-primary">{step.title}</h3>
                  <p className="text-muted-foreground">{step.text}</p>
                </div>
              ))}
            </div>
          </div>
        </section>

        {/* Final CTA */}
        <section className="bg-primary py-24 text-primary-foreground overflow-hidden relative">
          <div className="container mx-auto px-4 text-center relative z-10">
            <h2 className="mb-6 text-3xl font-bold tracking-tight sm:text-5xl">
              Время — самый ценный ресурс. Не теряйте его в сомнениях.
            </h2>
            <p className="mx-auto mb-10 max-w-2xl text-lg text-primary-foreground/80">
              Позвоните прямо сейчас, чтобы получить ответы на все вопросы, узнать о свободных местах и стоимости проживания.
            </p>
            <Button size="lg" variant="secondary" className="rounded-full px-12 h-16 text-xl font-bold hover:scale-105 transition-transform">
              <Phone className="mr-3 h-6 w-6" />
              Позвонить в пансионат
            </Button>
          </div>
          <div className="absolute top-0 left-0 w-64 h-64 bg-white/5 blur-3xl rounded-full -translate-x-1/2 -translate-y-1/2" />
          <div className="absolute bottom-0 right-0 w-96 h-96 bg-black/10 blur-3xl rounded-full translate-x-1/4 translate-y-1/4" />
        </section>
      </main>

      <footer className="border-t py-12 bg-secondary/10">
        <div className="container mx-auto px-4 text-center">
          <div className="flex items-center justify-center gap-2 mb-6">
            <Heart className="h-5 w-5 text-primary" />
            <span className="text-lg font-bold text-primary">Extramed-Psy</span>
          </div>
          <p className="text-sm text-muted-foreground">© 2024 Все права защищены. Пансионат для пожилых людей в Краснодаре.</p>
        </div>
      </footer>
    </div>
  );
}