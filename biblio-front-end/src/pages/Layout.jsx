"use client";

import * as React from "react";
import { Link, Outlet, useLocation } from "react-router";
import {
  Book,
  BookOpen,
  Home,
  Info,
  Library,
  Menu,
  Search,
  User,
} from "lucide-react";

import { Button } from "../components/ui/button";
import {
  NavigationMenu,
  NavigationMenuContent,
  NavigationMenuItem,
  NavigationMenuList,
  NavigationMenuTrigger,
} from "../components/ui/navigation-menu";
import { Sheet, SheetContent, SheetTrigger } from "../components/ui/sheet";
import { Input } from "../components/ui/input";

export default function Layout() {
  const location = useLocation();
  const [isOpen, setIsOpen] = React.useState(false);

  return (
    <div className="flex min-h-screen  flex-col">
      <header className="sticky top-0 z-50 w-full border-b bg-background">
        <div className="container flex h-16 items-center justify-between px-4 md:px-6">
          <div className="flex items-center gap-2">
            <Sheet open={isOpen} onOpenChange={setIsOpen}>
              <SheetTrigger asChild>
                <Button variant="ghost" size="icon" className="md:hidden">
                  <Menu className="h-5 w-5" />
                  <span className="sr-only">Toggle menu</span>
                </Button>
              </SheetTrigger>
              <SheetContent side="left" className="w-[240px] sm:w-[300px]">
                <div className="flex items-center gap-2 pb-4">
                  <BookOpen className="h-6 w-6" />
                  <span className="text-lg font-semibold">Library</span>
                </div>
                <nav className="grid gap-2 py-4">
                  <Link
                    to="/"
                    onClick={() => setIsOpen(false)}
                    className={`flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium ${
                      location.pathname === "/" ? "bg-muted" : "hover:bg-muted"
                    }`}
                  >
                    <Home className="h-4 w-4" />
                    Home
                  </Link>
                  <Link
                    to="/books"
                    onClick={() => setIsOpen(false)}
                    className={`flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium ${
                      location.pathname === "/books"
                        ? "bg-muted"
                        : "hover:bg-muted"
                    }`}
                  >
                    <Book className="h-4 w-4" />
                    Books
                  </Link>
                  <Link
                    to="/authors"
                    onClick={() => setIsOpen(false)}
                    className={`flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium ${
                      location.pathname === "/authors"
                        ? "bg-muted"
                        : "hover:bg-muted"
                    }`}
                  >
                    <User className="h-4 w-4" />
                    Authors
                  </Link>
                  <Link
                    to="/categories"
                    onClick={() => setIsOpen(false)}
                    className={`flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium ${
                      location.pathname === "/categories"
                        ? "bg-muted"
                        : "hover:bg-muted"
                    }`}
                  >
                    <Library className="h-4 w-4" />
                    Categories
                  </Link>
                  <Link
                    to="/about"
                    onClick={() => setIsOpen(false)}
                    className={`flex items-center gap-2 rounded-md px-3 py-2 text-sm font-medium ${
                      location.pathname === "/about"
                        ? "bg-muted"
                        : "hover:bg-muted"
                    }`}
                  >
                    <Info className="h-4 w-4" />
                    About
                  </Link>
                </nav>
              </SheetContent>
            </Sheet>
            <Link to="/" className="flex items-center gap-2">
              <BookOpen className="h-6 w-6" />
              <span className="text-lg font-semibold">Library</span>
            </Link>
          </div>
          <NavigationMenu className="hidden md:flex">
            <NavigationMenuList>
              <NavigationMenuItem>
                <Link
                  to="/"
                  className="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus:outline-none focus:bg-accent focus:text-accent-foreground disabled:opacity-50 disabled:pointer-events-none bg-background hover:bg-accent hover:text-accent-foreground h-10 py-2 px-4 group w-max"
                >
                  Home
                </Link>
              </NavigationMenuItem>
              <NavigationMenuItem>
                <NavigationMenuTrigger>Books</NavigationMenuTrigger>
                <NavigationMenuContent>
                  <ul className="grid w-[400px] gap-3 p-4 md:w-[500px] md:grid-cols-2 lg:w-[600px]">
                    <li className="row-span-3">
                      <Link
                        to="/books"
                        className="flex h-full w-full select-none flex-col justify-end rounded-md bg-gradient-to-b from-muted/50 to-muted p-6 no-underline outline-none focus:shadow-md"
                      >
                        <Book className="h-6 w-6" />
                        <div className="mb-2 mt-4 text-lg font-medium">
                          All Books
                        </div>
                        <p className="text-sm leading-tight text-muted-foreground">
                          Browse our complete collection of books
                        </p>
                      </Link>
                    </li>
                    <li>
                      <Link
                        to="/books/new-releases"
                        className="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                      >
                        <div className="text-sm font-medium leading-none">
                          New Releases
                        </div>
                        <p className="line-clamp-2 text-sm leading-snug text-muted-foreground">
                          Check out our latest additions
                        </p>
                      </Link>
                    </li>
                    <li>
                      <Link
                        to="/books/bestsellers"
                        className="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                      >
                        <div className="text-sm font-medium leading-none">
                          Bestsellers
                        </div>
                        <p className="line-clamp-2 text-sm leading-snug text-muted-foreground">
                          Our most popular books
                        </p>
                      </Link>
                    </li>
                    <li>
                      <Link
                        to="/books/recommendations"
                        className="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                      >
                        <div className="text-sm font-medium leading-none">
                          Recommendations
                        </div>
                        <p className="line-clamp-2 text-sm leading-snug text-muted-foreground">
                          Personalized suggestions based on your reading history
                        </p>
                      </Link>
                    </li>
                  </ul>
                </NavigationMenuContent>
              </NavigationMenuItem>
              <NavigationMenuItem>
                <Link
                  to="/authors"
                  className="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus:outline-none focus:bg-accent focus:text-accent-foreground disabled:opacity-50 disabled:pointer-events-none bg-background hover:bg-accent hover:text-accent-foreground h-10 py-2 px-4 group w-max"
                >
                  Authors
                </Link>
              </NavigationMenuItem>
              <NavigationMenuItem>
                <Link
                  to="/categories"
                  className="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus:outline-none focus:bg-accent focus:text-accent-foreground disabled:opacity-50 disabled:pointer-events-none bg-background hover:bg-accent hover:text-accent-foreground h-10 py-2 px-4 group w-max"
                >
                  Categories
                </Link>
              </NavigationMenuItem>
              <NavigationMenuItem>
                <Link
                  to="/about"
                  className="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus:outline-none focus:bg-accent focus:text-accent-foreground disabled:opacity-50 disabled:pointer-events-none bg-background hover:bg-accent hover:text-accent-foreground h-10 py-2 px-4 group w-max"
                >
                  About
                </Link>
              </NavigationMenuItem>
            </NavigationMenuList>
          </NavigationMenu>
          <div className="flex items-center gap-2">
            <form className="hidden md:block">
              <div className="relative">
                <Search className="absolute left-2.5 top-2.5 h-4 w-4 text-muted-foreground" />
                <Input
                  type="search"
                  placeholder="Search books..."
                  className="w-[200px] pl-8 md:w-[250px] lg:w-[300px]"
                />
              </div>
            </form>
            <Button variant="outline" size="icon" className="md:hidden">
              <Search className="h-4 w-4" />
              <span className="sr-only">Search</span>
            </Button>
            <Link to={'/register'}>
              <Button className="cursor-pointer">Sign up</Button>
            </Link>
          </div>
        </div>
      </header>
      <main className="grow-1 flex justify-center py-10 items-center ">
        <Outlet />
      </main>
      <footer className="border-t py-6 md:py-0">
        <div className="container mx-auto px-20 flex flex-col items-center justify-between gap-4 md:h-16 md:flex-row">
          <p className="text-sm text-muted-foreground">
            © {new Date().getFullYear()} Library. All rights reserved.
          </p>
          <div className="flex items-center gap-4 text-sm text-muted-foreground">
            <Link to="/terms" className="underline underline-offset-4">
              Terms
            </Link>
            <Link to="/privacy" className="underline underline-offset-4">
              Privacy
            </Link>
            <Link to="/contact" className="underline underline-offset-4">
              Contact
            </Link>
          </div>
        </div>
      </footer>
    </div>
  );
}
