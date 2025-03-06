import React from 'react'

export default function Authors() {
  return (
    <div className="container px-4 py-8 md:px-6 md:py-12">
      <h1 className="text-3xl font-bold tracking-tight md:text-4xl">Authors</h1>
      <p className="mt-4 text-muted-foreground">Explore authors in our collection</p>
      <div className="mt-8 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        {/* Authors would go here */}
        <div className="rounded-lg bg-muted p-6"></div>
        <div className="rounded-lg bg-muted p-6"></div>
        <div className="rounded-lg bg-muted p-6"></div>
        <div className="rounded-lg bg-muted p-6"></div>
        <div className="rounded-lg bg-muted p-6"></div>
        <div className="rounded-lg bg-muted p-6"></div>
      </div>
    </div>
  )
}
