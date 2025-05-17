import { __ } from "@wordpress/i18n";
import { useBlockProps, RichText, MediaPlaceholder } from "@wordpress/block-editor";

import "./editor.scss";

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 */
export default function Edit({ attributes, setAttributes }) {
	const { description, user_name, user_company_name, user_image } = attributes;
	return (
		<section {...useBlockProps()}>
			<RichText
				tagName="p"
				value={description}
				onChange={(text) => setAttributes({ description: text })}
				placeholder={__(
					"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
				)}
			/>
			<div className="tt-prime-testimonial-block-user-details">
				<div className="tt-prime-testimonial-block-user-container">
					<div className="tt-prime-testimonial-block-user-avatar">
						<MediaPlaceholder
						onSelect={(img) => {
							setAttributes({
								user_image: {
									id: img.id,
									alt: img.alt,
									url: img.url,
								},
							});
						}}
						allowedTypes={["image"]}
						multiple={false}
						labels={{ title: "Upload Card Image" }}
					/>
					</div>
					<div className="tt-prime-testimonial-block-user-content">
						<RichText
							tagName="p"
							value={user_name}
							onChange={(text) => setAttributes({ user_name: text })}
							placeholder={__("Jhon Doe", "prime-testmonial-block")}
						/>
						<RichText
							tagName="p"
							value={user_company_name}
							onChange={(text) => setAttributes({ user_company_name: text })}
							placeholder={__("Company Name", "prime-testmonial-block")}
						/>
					</div>
				</div>
			</div>
		</section>
	);
}
