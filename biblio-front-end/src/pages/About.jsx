import React from 'react'

export default function About() {
  return (
    <div className="container px-4 py-8 md:px-6 md:py-12">
      <h1 className="text-3xl font-bold tracking-tight md:text-4xl">About Our Library</h1>
      <div className="mt-8 grid gap-8 md:grid-cols-2">
        <div className="prose max-w-none">
          <p>
            Welcome to our library, a place where knowledge meets imagination. Our mission is to provide access to a
            diverse collection of books and resources that inspire, educate, and entertain our community.
          </p>
          <p>
            Founded in 2023, our library has grown to house over 10,000 books across various genres and topics. We are
            committed to fostering a love for reading and learning among people of all ages and backgrounds.
          </p>
          <p>
            Our dedicated team of librarians and staff work tirelessly to curate our collection, organize events, and
            create a welcoming environment for all visitors. We believe in the power of books to transform lives and
            build stronger communities.
          </p>
        </div>
        <div className="aspect-video rounded-lg bg-muted"></div>
      </div>
    </div>
  )
}
