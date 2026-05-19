import { Resend } from "resend"
import { NextRequest, NextResponse } from "next/server"

const resend = new Resend(process.env.RESEND_API_KEY)

interface EmailRequestBody {
  name: string
  email: string
  subject: string
  message: string
}

export async function POST(request: NextRequest) {
  try {
    const body: EmailRequestBody = await request.json()

    // Validate required fields
    if (!body.name || !body.email || !body.subject || !body.message) {
      return NextResponse.json(
        { error: "Missing required fields" },
        { status: 400 }
      )
    }

    // Validate email format
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    if (!emailRegex.test(body.email)) {
      return NextResponse.json(
        { error: "Invalid email format" },
        { status: 400 }
      )
    }

    // Send email via Resend
    const data = await resend.emails.send({
      from: "onboarding@resend.dev", // Use your verified domain after setup
      to: "sanroque.andrei.cambi@gmail.com", // Change to your email
      replyTo: body.email,
      subject: `New message from ${body.name}: ${body.subject}`,
      html: `
        <!DOCTYPE html>
        <html>
          <head>
            <meta charset="utf-8">
            <style>
              body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
              .container { max-width: 600px; margin: 0 auto; padding: 20px; }
              .header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; padding: 20px; border-radius: 8px 8px 0 0; }
              .header h1 { margin: 0; font-size: 24px; }
              .content { background: #f9f9f9; padding: 20px; border: 1px solid #e0e0e0; border-radius: 0 0 8px 8px; }
              .field { margin-bottom: 20px; }
              .field-label { font-weight: bold; color: #667eea; margin-bottom: 5px; }
              .field-value { background: white; padding: 12px; border-radius: 4px; border-left: 4px solid #667eea; }
              .message-box { background: white; padding: 15px; border-radius: 4px; border-left: 4px solid #667eea; margin-top: 10px; white-space: pre-wrap; word-wrap: break-word; }
              .footer { margin-top: 20px; font-size: 12px; color: #999; border-top: 1px solid #e0e0e0; padding-top: 20px; }
            </style>
          </head>
          <body>
            <div class="container">
              <div class="header">
                <h1>📧 New Contact Form Message</h1>
              </div>
              <div class="content">
                <div class="field">
                  <div class="field-label">From:</div>
                  <div class="field-value">${body.name}</div>
                </div>

                <div class="field">
                  <div class="field-label">Email:</div>
                  <div class="field-value">
                    <a href="mailto:${body.email}">${body.email}</a>
                  </div>
                </div>

                <div class="field">
                  <div class="field-label">Subject:</div>
                  <div class="field-value">${body.subject}</div>
                </div>

                <div class="field">
                  <div class="field-label">Message:</div>
                  <div class="message-box">${body.message}</div>
                </div>

                <div class="footer">
                  <p>This email was sent from your portfolio contact form.</p>
                </div>
              </div>
            </div>
          </body>
        </html>
      `,
    })

    if (data.error) {
      return NextResponse.json(
        { error: "Failed to send email" },
        { status: 500 }
      )
    }

    return NextResponse.json(
      { success: true, message: "Email sent successfully", id: data.data?.id },
      { status: 200 }
    )
  } catch (error) {
    console.error("Email sending error:", error)
    return NextResponse.json(
      { error: "Internal server error" },
      { status: 500 }
    )
  }
}
