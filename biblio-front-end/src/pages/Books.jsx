import React from "react";

export default function Books() {
  return (
    <div className="container px-4 py-8 md:px-6 md:py-12">
      <h1 className="text-3xl font-bold tracking-tight md:text-4xl">Books</h1>
      <p className="mt-4 text-muted-foreground">
        Browse our collection of books
      </p>
      <div className="mt-8 grid gap-6 md:grid-cols-2 lg:grid-cols-4">
        {/* Books would go here */}
        <div className="aspect-[2/3] rounded-lg bg-muted"></div>
        <div className="aspect-[2/3] rounded-lg bg-muted"></div>
        <div className="aspect-[2/3] rounded-lg bg-muted"></div>
        <div className="aspect-[2/3] rounded-lg bg-muted"></div>
        <div className="aspect-[2/3] rounded-lg bg-muted"></div>
        <div className="aspect-[2/3] rounded-lg bg-muted"></div>
        <div className="aspect-[2/3] rounded-lg bg-muted"></div>
        <div className="aspect-[2/3] rounded-lg bg-muted"></div>
      </div>
    </div>
  );
}
